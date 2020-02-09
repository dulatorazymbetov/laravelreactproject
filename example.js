import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Paper from '@material-ui/core/Paper';
import Title from "layout/title";

const useStyles = makeStyles(theme => ({
	
}));

function EditRespond(){
	const classes = useStyles();

	useEffect(() => {
       
    }, []);

	return (
		<Box p={4}>
			<Title content="Загрузка..." />
			<Box mt={4} p={4} component={Paper}>
				   1234	
			</Box>
		</Box>
	);
}

export default EditRespond;