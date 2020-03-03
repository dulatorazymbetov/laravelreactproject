import React, { Suspense, lazy } from 'react';
import { Route, Redirect, Switch } from "react-router-dom";
import Box from '@material-ui/core/Box';

import SignIn from "./auth/sign_in";
import ApplicantSignIn from "./applicant/sign_in";
import ApplicantReg from "./applicant/reg";

import Header from "@layouts/header";
import Navigation from "@layouts/navigation";
import Footer from "@layouts/footer";

import { useAuth } from "@contexts/auth";

function PrivateRoute({ component: Component, ...rest }){
    return (
        <Route
            {...rest}
            render={props => {
                const OtherComponent = lazy(() => import('.'+rest.path+'/index.js'));
                return (
                    <Suspense fallback={<div></div>}>
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
            <Box component={Switch}>
                <Route path="/applicant" exact component={ApplicantSignIn}/>
                <Route path="/applicant_reg" exact component={ApplicantReg}/>
                <Route path="/" component={SignIn}/>
            </Box>
        );
    }
    else {
        
        return (
            <div>
                <Header />
                <Box display="flex">
                    <Navigation />
                    <Box mt={12} mx={5} width="100%">
                        <Switch>
                            {userInfo.modules.map((list, index) => {
                                return (
                                    <PrivateRoute key={index} path={'/'+list.url} exact component={list.name} />
                                );
                            })}
                        </Switch>
                    </Box>
                </Box>
                <Footer />
            </div>
        );
    }
    
}
export default Routing;
