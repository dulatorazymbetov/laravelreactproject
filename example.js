import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';

import Title from "@layouts/title";
import FormBuilder from "@layouts/form";
import TableBuilder from "@layouts/form";

const useStyles = makeStyles(theme => ({
	
}));

function ListOfApplicants(){
	const classes = useStyles();

	useEffect(() => {
       
    }, []);

	return (
		<Box>
			<Title content="Загрузка..." />
			<Box mt={4} p={4}>
				   1234	
			</Box>
		</Box>
	);
}

export default ListOfApplicants;