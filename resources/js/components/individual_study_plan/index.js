import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Paper from '@material-ui/core/Paper';
import Title from "@layouts/title";



const useStyles = makeStyles(theme => ({
	
}));

function StudyPlan(){
	const classes = useStyles();

	useEffect(() => {
       
    }, []);

	return (
		<Box>
			<Title content="Индивидуальный учебный план" />
		</Box>
	);
}

export default StudyPlan;