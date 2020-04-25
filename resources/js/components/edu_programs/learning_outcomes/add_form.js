import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import FormBuilder from "@layouts/form";
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
		<FormBuilder 
			title="Добавить новое направление"
			fields={[
				{
					name: 'title_kk',
					label: 'Название на казахском языке',
				},
				{
					name: 'title_ru',
					label: 'Название на русском языке',
				},
				{
					name: 'title_en',
					label: 'Название на английском языке',
				},

				{
					name: 'code',
					label: 'Код результата обучения',
				},
			]}
			handleSubmit={handleSubmit}
		/>
	);
}

export default AddOutcomesForm;