import React, { useState, useEffect } from "react";
import { makeStyles } from '@material-ui/core/styles';

import Box from '@material-ui/core/Box';
import Button from '@material-ui/core/Button';
import Paper from '@material-ui/core/Paper';

import Title from "@layouts/title";
import FormBuilder from "@layouts/form";
import { useLang } from "@contexts/lang";


const useStyles = makeStyles(theme => ({
}));

function DiplomaSupplementItem(props){
	const classes = useStyles();

	const { getL } = useLang();

	useEffect(() => {
		getData();
	}, []);

	const getData = () => {
		window.axios.get('diploma_supplement/'+props.id)
			.then((response) => {

			});
	}

	const handleSubmit = (data) => {
		
	}

	const tabChange =(event, newValue) => {
		setTab(newValue);
	}

	return (
		<div>
			<Title 
				content='Детали диплома'
				tree={[
					{link: '/diploma_supplement', name: 'Приложение к диплому'},
					{name: 'Детали диплома'}
				]}
			/>
			<Box mt={4} component={Paper}>
				<FormBuilder 
					fields={[
						{
							name: 'x123'
						}
					]}
				/>
			</Box>
			<Box mt={4} component={Paper} p={2}>
				<Button component="a" variant="contained" href={"/diploma/ru/"+props.id}>Приложение к диплому на русском</Button>
				<Button component="a" variant="contained" href={"/diploma/en/"+props.id}>Приложение к диплому на английском</Button>
				<Button component="a" variant="contained" href={"/diploma/kk/"+props.id}>Приложение к диплому на казахском</Button>
			</Box>
		</div>
	);
}
export default DiplomaSupplementItem;