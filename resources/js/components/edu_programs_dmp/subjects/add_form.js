import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import FormBuilder from "@layouts/form";
import { useLang } from "@contexts/lang";

const useStyles = makeStyles(theme => ({
	
}));


function AddSubjectsForm(props){
	const classes = useStyles();

	const [isLoading, setIsLoading] = useState(true);
	const [fields, setFields] = useState([]);

	const { getL } = useLang();
	useEffect(() => {
       	window.axios.get('subjects/form').then((response) => {
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
					name: 'description_kk',
					label: 'Описание на казахском языке',
				},
				{
					name: 'description_ru',
					label: 'Описание на русском языке',
				},
				{
					name: 'description_en',
					label: 'Описание на английском языке',
				},
				{
					name: 'subject_cicle_id',
					label: 'Цикл дисциплины',
					type: 'select',
					select: {
						items: response.data.subject_cicles,
						label: 'title_'+getL,
						value: 'id'
					}
				},
				{
					name: 'subject_component_id',
					label: 'Компонент',
					type: 'select',
					select: {
						items: response.data.subject_components,
						label: 'title_'+getL,
						value: 'id'
					}
				},
				{
					name: 'credits',
					label: 'Кредиты',
					type: 'float'
				}
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
			title="Добавить новую дисциплину"
			fields={fields}
			handleSubmit={handleSubmit}
		/>
	);
}

export default AddSubjectsForm;