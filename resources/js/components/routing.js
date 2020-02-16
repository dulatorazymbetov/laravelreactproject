import React, { Suspense, lazy } from 'react';
import { Route, Redirect } from "react-router-dom";
import Box from '@material-ui/core/Box';

import SignIn from "./auth/sign_in";
import ApplicantSignIn from "./applicant/sign_in";

import Header from "@layouts/header";
import Navigation from "@layouts/navigation";
import Title from "@layouts/title";

import { useAuth } from "@contexts/auth";

function PrivateRoute({ component: Component, ...rest }){
    return (
        <Route
            {...rest}
            render={props => {
                const OtherComponent = lazy(() => import('.'+rest.path+'/index.js'));
                return (
                    <Suspense fallback={<div>Загрузка...</div>}>
                        <OtherComponent />
                    </Suspense>
                );
            }}
        />
    );
}

function Routing(){
    const userInfo = useAuth().userInfo;
    if(!userInfo){
        return (
            <Box>
                <Route path="/" exact component={SignIn}/>
                <Route path="/applicant" exact component={ApplicantSignIn}/>
            </Box>
        );
    }
    else {
        
        return (
            <div>
                <Header />
                <Box display="flex">
                    <Navigation />
                    <Box mt={12} mx={5}>
                        {userInfo.modules.map((list, index) => {
                            return (
                                <PrivateRoute key={index} path={'/'+list.url} exact component={list.name} />
                            );
                        })}
                    </Box>
                </Box>
            </div>
        );
    }
    
}
export default Routing;
