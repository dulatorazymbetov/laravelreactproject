import React, { useState, useEffect } from 'react';

import { ThemeProvider, createMuiTheme } from '@material-ui/core/styles';
import { BrowserRouter as Router } from "react-router-dom";
import Routing from "./routing";

import ReactDOM from 'react-dom';

import Cookies from 'js-cookie';

import { AuthContext } from "@contexts/auth";
import { LangContext } from "@contexts/lang";

const theme = createMuiTheme({
    palette: {
        primary: {
            main: '#3f51b5',
            dark: '#002b70',
            contrastText: '#ffff'
        },
        secondary: {main: '#1B6CF3'}
    },
    typography: {
        h1: {
            fontWeight: '900',
            fontSize: '36px',
        },
        h2: {
            color: '#111',
            fontWeight: '900',
            fontSize: '30px',
        },
        h5: {
            color: '#111',
            fontWeight: '700',
        }
    },
    spacing: 8,
    overrides: {
        MuiFilledInput: {
            root: {
                backgroundColor: '#F8F9FF',
                '&:hover': {
                    backgroundColor: '#eee',
                }
            }
        }
    }
});

var language = window.navigator ? (window.navigator.language ||
    window.navigator.systemLanguage ||
    window.navigator.userLanguage) : "ru";
language = language.substr(0, 2).toLowerCase();

function App() {
    const [authToken, setAuthToken] = useState({});
    const [lang, setLang] = useState(language);

    let words = {};
    const setW = (e) => {words = e;}
    const getW = (e) => {return words[e][lang];}
    const setL = (e) => {setLang(e);}

    useEffect(() => {
        if (Cookies.get('Authorization')) {
            window.axios.defaults.headers.common['Authorization'] = "Bearer " + Cookies.get('Authorization');
            window.axios.get('auth').then((response) => {
                
            });
        }
    }, []);

    const setToken = (token) => {
        console.log(token);
        window.axios.defaults.headers.common['Authorization'] = "Bearer " + token;
        Cookies.set('Authorization', token);
    }

    return (
        <ThemeProvider theme={theme}>
            <LangContext.Provider value={{setW, getW, setL}}>
                <AuthContext.Provider value={{ authToken, setToken}}>
                    <Router>
                        <Routing />
                    </Router>
                </AuthContext.Provider>
            </LangContext.Provider>
        </ThemeProvider>
    );
}

ReactDOM.render(<App />, document.querySelector('#app'));
