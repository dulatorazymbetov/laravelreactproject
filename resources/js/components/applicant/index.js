import React from 'react';
import { Route, Redirect } from "react-router-dom";
import Box from '@material-ui/core/Box';


import SignIn from "./auth/sign_in";
import SignIn from "./applicant/index";

function PrivateRoute({ component: Component, ...rest }) {
    return (
        <Route
            {...rest}
            render={props => {
                console.log(props);
                return (
                    <Box display="flex" minHeight="100vh" flexDirection="column">
                        <Component {...props} />
                        {rest.footer !== 'hidden' && <div>footer</div>}
                    </Box>
                );
            }}
        />
    );
}

function Routing(){
	return (
		<Box>
            <PrivateRoute path="/" exact component={SignIn} />
            <PrivateRoute path="/applicant" exact component={Applicant} />
		</Box>
	);
}
export default Routing;
