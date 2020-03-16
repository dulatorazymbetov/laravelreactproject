import React from 'react';
import { makeStyles } from '@material-ui/core/styles';

import Box from '@material-ui/core/Box';


const useStyles = makeStyles(theme => ({
	
}));

function Footer(props){
	const classes = useStyles();
	
	
	return (
		<Box ml={35} mt={6} mb={4} style={{color: '#777', fontWeight: 'bold', fontSize: '14px', textAlign: 'center'}}>
			IITU CAMPUS 2020
		</Box>
	);
}
export default Footer;