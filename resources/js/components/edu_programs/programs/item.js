import React, { useState, useEffect } from "react";
import { makeStyles } from '@material-ui/core/styles';

import Box from '@material-ui/core/Box';
import Paper from '@material-ui/core/Paper';
import Button from '@material-ui/core/Button';

import Title from "@layouts/title";
import FormBuilder from "@layouts/form";
import { useLang } from "@contexts/lang";

const useStyles = makeStyles(theme => ({
	
}));

function EduProgramsItem(props){
	const classes = useStyles();
	const [isLoading, setIsLoading] = useState(true);
	const [data, setData] = useState({});
	const [form, setForm] = useState({});
	const [formDisabled, setFormDisabled] = useState(true);

	const { getL } = useLang();

	useEffect(() => {
		getData();
	}, []);

	const getData = () => {
		window.axios.get('edu_programs/'+props.id)
			.then((response) => {
				setData(response.data.info);
				setForm(response.data.form)
				setIsLoading(false);
			});
	}
	const handleSubmit = (data) => {

	}

	if(isLoading){ return (<div />); }

	return (
		<div>
			<Title 
				content={data['title_'+getL]}
				tree={[
					{link: '/edu_programs', name: 'Образовательные программы'},
					{name: data['title_'+getL]}
				]}
			/>
			<Box mt={4} component={Paper}>
				<FormBuilder
					disabled={formDisabled}
					handleSubmit={handleSubmit}
					title="Информация о программе"
					fields={[
						{
							name: 'reg_num',
							label: 'Шифр, регистрационный номер',
							value: data.reg_num
						},
						{
							name: 'title_kk',
							label: 'Название на казахском языке',
							value: data.title_kk
						},
						{
							name: 'title_ru',
							label: 'Название на русском языке',
							value: data.title_ru
						},
						{
							name: 'title_en',
							label: 'Название на английском языке',
							value: data.title_en
						},
						{
							name: 'edu_programs_type_id',
							label: 'Тип образовательной программы',
							type: 'select',
							value: data.edu_programs_type_id,
							select: {
								items: form.edu_programs_type,
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
								items: form.edu_programs_group,
								label: 'title_'+getL,
								value: 'id'
							},
							width: 1/2,
							value: data.edu_programs_group_id
						},
						{
							name: 'goals_kk',
							label: "Цель ОП на казахском языке",
							value: data.goals_kk
						},
						{
							name: 'goals_ru',
							label: "Цель ОП на русском языке",
							value: data.goals_ru
						},
						{
							name: 'goals_en',
							label: "Цель ОП на английском языке",
							value: data.goals_en
						},
						{
							name: 'academic_degree_id',
							label: 'Присуждаемая академическая степень',
							type: 'select',
							select: {
								items: form.academic_degree,
								label: 'title_'+getL,
								value: 'id'
							},
							width: 1/2,
							value: data.academic_degree_id
						},
						{
							name: 'study_language_id',
							label: 'Язык обучения',
							type: 'select',
							select: {
								items: form.teaching_language,
								label: 'title_'+getL,
								value: 'id'
							},
							width: 1/2,
							value: data.study_language_id
						},
						{
							name: 'duration',
							label: 'Продолжительность обучения в годах',
							type: 'float',
							width: 1/2,
							value: data.duration
						},
						{
							name: 'credits',
							label: 'Количество кредитов',
							type: 'float',
							width: 1/2,
							value: data.credits
						},
						{
							name: 'app_date',
							label: 'Дата утверждения ОП',
							type: 'date',
							value: data.app_date
						},
						{
							name: 'nrk_level',
							label: 'Уровень по НРК',
							type: 'float',
							width: 1/2,
							value: data.nrk_level
						},
						{
							name: 'ork_level',
							label: 'Уровень по ОРК',
							type: 'float',
							width: 1/2,
							value: data.ork_level
						}
					]} />
					{formDisabled && <Box p={3}>
						<Button 
							variant="contained" 
							size="large"
							onClick={() => {setFormDisabled(false)}}
						>
							Редактировать
						</Button>
					</Box>}
			</Box>
		</div>
	);
}
export default EduProgramsItem;