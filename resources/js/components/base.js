import React, { useState, useEffect } from 'react';

import ReactDOM from 'react-dom';
import { BrowserRouter as Router } from "react-router-dom";
import Cookies from 'js-cookie';

import { ThemeProvider, createMuiTheme } from '@material-ui/core/styles';

import Routing from "./routing";

import { AuthContext } from "@contexts/auth";
import { LangContext } from "@contexts/lang";

import { loadProgressBar } from 'axios-progress-bar';
import 'axios-progress-bar/dist/nprogress.css';

loadProgressBar();

const theme = createMuiTheme({
    palette: {
        primary: {
            main: 'rgb(63, 81, 181)',
            dark: 'rgb(0, 43, 112)',
            contrastText: '#fff'
        },
        secondary: {main: '#1b6cf3'},
        default: {main: '#fbfbfb'}
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
        },
        h6: {
            fontWeight: '900',
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
    const [authToken, setAuthToken] = useState(null);
    const [userInfo, setUserInfo] = useState(null);
    const [lang, setLang] = useState(language);
    const [isLoading, setIsLoading] = useState(true);

    let words = {};
    const setW = (e) => {words = e;}
    const getW = (e) => {return words[e][lang];}
    const setL = (e) => {setLang(e);}

    useEffect(() => {
        if (Cookies.get('Authorization')) {
            window.axios.defaults.headers.common['Authorization'] = "Bearer " + Cookies.get('Authorization');
            window.axios.get('auth').then((response) => {
                setAuthToken(Cookies.get('Authorization'));
                setUserInfo(response.data);
                setIsLoading(false);
            });
        }
        else {
            setIsLoading(false);
        }
    }, []);

    const setToken = (token) => {
        window.axios.defaults.headers.common['Authorization'] = "Bearer " + token;
        Cookies.set('Authorization', token);
        setAuthToken(token);
    }
    return (
        <ThemeProvider theme={theme}>
            <LangContext.Provider value={{setW, getW, setL, getL: lang}}>
                <AuthContext.Provider value={{ authToken, setToken, userInfo, setUserInfo}}>
                    {!isLoading && <Router>
                        <Routing />
                    </Router>}
                </AuthContext.Provider>
            </LangContext.Provider>
        </ThemeProvider>
    );
}

ReactDOM.render(<App />, document.querySelector('#app'));
