import React, { useState, useEffect } from 'react';

import { ThemeProvider, createMuiTheme } from '@material-ui/core/styles';
import { BrowserRouter as Router } from "react-router-dom";
import Routing from "./routing";

import ReactDOM from 'react-dom';

import { AuthContext } from "../context/auth";

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
            color: '#002b70',
            fontWeight: '900',
            fontSize: '32px',
        },
        h2: {
            color: '#002b70',
            fontWeight: '900',
            fontSize: '30px',
        },
        h5: {
            color: '#002b70',
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


function App() {
    const [authToken, setAuthToken] = useState({});

    return (
        <ThemeProvider theme={theme}>
            <AuthContext.Provider value={{authToken, setAuthToken}}>
                <Routing />
            </AuthContext.Provider>
        </ThemeProvider>
    );
}

ReactDOM.render(<App />, document.querySelector('#app'));
