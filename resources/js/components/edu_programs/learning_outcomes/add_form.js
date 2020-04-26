import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';

import { useLang } from "@contexts/lang";

const useStyles = makeStyles(theme => ({
	
}));


function AddOutcomesForm(props){
	const classes = useStyles();
	const { getL } = useLang();

	const handleSubmit = (data) => {
		window.axios.post('edu_programs/'+props.id+'/learning_outcomes', data)
		.then((response) => {
			
		});
	}

	return (
		
	);
}

export default AddOutcomesForm;