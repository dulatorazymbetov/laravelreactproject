import React from 'react';
import { Route, Redirect } from "react-router-dom";
import Box from '@material-ui/core/Box';

import SignIn from "./auth/sign_in";
import ApplicantSignIn from "./applicant/sign_in";

import Header from "@layouts/header";
import Navigation from "@layouts/navigation";
import Title from "@layouts/title";

import { useAuth } from "@contexts/auth";

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
                        <Title content={"Welcome back, " + userInfo.firstname + " " + userInfo.lastname} tree="Main page" />
                    </Box>
                </Box>
            </div>
        );
    }
    
}
export default Routing;
