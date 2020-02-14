import React from 'react';
import { Route, Redirect } from "react-router-dom";
import Box from '@material-ui/core/Box';

import SignIn from "./auth/sign_in";
import ApplicantSignIn from "./applicant/sign_in";

import { useAuth } from "@contexts/auth";

function PrivateRoute({ component: Component, altcomponent: Altcomponent, ...rest }) {
    const status = useAuth().userInfo;
    console.log(status);
    return (
        <Route
            {...rest}
            render={props => {
                if(rest.status === 'guest' && status){
                    return (
                        <Box display="flex" minHeight="100vh" flexDirection="column">
                            <Component {...props} />
                            {rest.footer !== 'hidden' && <div>footer</div>}
                        </Box>
                    );    
                }
                else {
                    return (<div><Altcomponent {...props} /></div>);
                }
            }}
        />
    );
}

function Routing(){
	return (
		<Box>
            <PrivateRoute path="/" exact component={SignIn} altcomponent={ApplicantSignIn} footer="hidden" access='guest'/>
            <PrivateRoute path="/applicant" exact component={ApplicantSignIn} footer="hidden" access='guest'/>
		</Box>
	);
}
export default Routing;
