import React from 'react';
import { Route, Redirect } from "react-router-dom";
import Box from '@material-ui/core/Box';

import SignIn from "./auth/sign_in";

function Routing(){
	return (
		<Box>
			<SignIn />	
		</Box>
	);
}
export default Routing;