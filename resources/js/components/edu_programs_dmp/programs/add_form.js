import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import FormBuilder from "@layouts/form";
import { useLang } from "@contexts/lang";

const useStyles = makeStyles(theme => ({
	
}));


function AddEduProgramsForm(props){
	const classes = useStyles();

	const [isLoading, setIsLoading] = useState(true);
	const [fields, setFields] = useState([]);

	const { getL } = useLang();
	useEffect(() => {
       	window.axios.get('edu_programs/form').then((response) => {
			setFields([
				{
					name: 'reg_num',
					label: 'Шифр, регистрационный номер',
				},
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
					name: 'edu_programs_type_id',
					label: 'Тип образовательной программы',
					type: 'select',
					select: {
						items: response.data.edu_programs_type,
						label: 'title_'+getL,
						value: 'id'
					},
					width: 1/2
				}, 
				{
					name: 'edu_programs_group_id',
					label: 'Группа образовательных программ',
					type: 'select',
					select: {
						items: response.data.edu_programs_group,
						label: 'title_'+getL,
						value: 'id'
					},
					width: 1/2
				},
				{
					name: 'goals_kk',
					label: "Цель ОП на казахском языке",
				},
				{
					name: 'goals_ru',
					label: "Цель ОП на русском языке",
				},
				{
					name: 'goals_en',
					label: "Цель ОП на английском языке",
				},
				{
					name: 'academic_degree_id',
					label: 'Присуждаемая академическая степень',
					type: 'select',
					select: {
						items: response.data.academic_degree,
						label: 'title_'+getL,
						value: 'id'
					},
					width: 1/2
				},
				{
					name: 'study_language_id',
					label: 'Язык обучения',
					type: 'select',
					select: {
						items: response.data.teaching_language,
						label: 'title_'+getL,
						value: 'id'
					},
					width: 1/2
				},
				{
					name: 'duration',
					label: 'Продолжительность обучения в годах',
					type: 'float',
					width: 1/2
				},
				{
					name: 'credits',
					label: 'Количество кредитов',
					type: 'float',
					width: 1/2
				},
				{
					name: 'app_date',
					label: 'Дата утверждения ОП',
					type: 'date'
				},
				{
					name: 'nrk_level',
					label: 'Уровень по НРК',
					type: 'float',
					width: 1/2
				},
				{
					name: 'ork_level',
					label: 'Уровень по ОРК',
					type: 'float',
					width: 1/2
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
			title="Добавить образовательную программу"
			fields={fields}
			handleSubmit={handleSubmit}
		/>
	);
}

export default AddEduProgramsForm;