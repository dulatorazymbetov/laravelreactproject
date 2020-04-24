import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import FormBuilder from "@layouts/form";
import { useLang } from "@contexts/lang";

const useStyles = makeStyles(theme => ({
	
}));


function AddOutcomesForm(props){
	const classes = useStyles();

	const [isLoading, setIsLoading] = useState(true);
	const [fields, setFields] = useState([]);

	const { getL } = useLang();
	useEffect(() => {
       	window.axios.get('learning_outcomes/form').then((response) => {
			setFields([
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
					name: 'edu_programs_id',
					label: 'Образовательная программа',
					type: 'select',
					select: {
						items: response.data.edu_programs,
						label: 'title_'+getL,
						value: 'id'
					}
				},
				{
					name: 'code',
					label: 'Код результата обучения',
				},
			]);
			setIsLoading(false);
       	});
    }, []);

	const handleSubmit = (data) => {
		window.axios.post('edu_programs', data)
		.then((response) => {
			props.close();
			props.refresh();
		});
	}

	if(isLoading){return (<div />);}

	return (
		<FormBuilder 
			title="Добавить новое направление"
			fields={fields}
			handleSubmit={handleSubmit}
		/>
	);
}

export default AddOutcomesForm;