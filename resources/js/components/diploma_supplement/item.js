import React, { useState, useEffect } from "react";
import { makeStyles } from '@material-ui/core/styles';

import Box from '@material-ui/core/Box';
import Paper from '@material-ui/core/Paper';
import Button from '@material-ui/core/Button';
import Divider from '@material-ui/core/Divider';

import DeleteIcon from '@material-ui/icons/Delete';
import EditIcon from '@material-ui/icons/Edit';

import Title from "@layouts/title";
import FormBuilder from "@layouts/form";
import { useLang } from "@contexts/lang";
import Alert from '@material-ui/lab/Alert';
import Tabs from '@material-ui/core/Tabs';
import Tab from '@material-ui/core/Tab';

import IconButton from '@material-ui/core/IconButton';

import KeyboardBackspaceIcon from '@material-ui/icons/KeyboardBackspace';

const useStyles = makeStyles(theme => ({
	title: {
		flex: '0 0 auto',
		fontWeight: '900',
		fontSize: '1.45rem'
	},
}));

function DiplomaSupplementItem(props){
	const classes = useStyles();
	const [isLoading, setIsLoading] = useState(true);
	const [data, setData] = useState({});
	const [diplomInfo, setDiplomInfo] = useState({});
	const [formDisabled, setFormDisabled] = useState(true);
	const [tab, setTab] = useState(0);
	const [isSuccess, setIsSuccess] = useState(false);

	const { getL } = useLang();

	useEffect(() => {
		getData();
	}, []);

	const getData = () => {
		window.axios.get('diploma_supplement/'+props.id)
			.then((response) => {
				console.log(response);
				setData(response.data.info);
				if (typeof response.data.diplom_info !== 'undefined' && response.data.diplom_info.length > 0) {
					setDiplomInfo(response.data.diplom_info)
				}
				setIsLoading(false);
			});
	}

	const handleSubmit = (data) => {
		setIsLoading(true);
		setFormDisabled(true);
		console.log(data + "10");
		window.axios.post('diploma_supplement/'+props.id, data)
			.then((response) => {
				console.log(response.data + "1");
				setIsSuccess(true);
				setIsLoading(false);
			})
			.catch(function (error) {
    			console.log(error.response);
  			});
	}

	const tabChange =(event, newValue) => {
		setTab(newValue);
	}

	if(isLoading){ return (<div />); }

	return (
		<div>
			<Title 
				content='Детали диплома'
				tree={[
					{link: '/edu_programs', name: 'Приложение к диплому'},
					{name: 'Детали диплома'}
				]}
			/>
			{isSuccess && formDisabled && <Box mt={4}>
				<Alert variant="filled" severity="success">
        			Данные были успешно сохранены
				</Alert>
			</Box>}
			<Box mt={4} component={Paper}>
				{!formDisabled && <Box pl={1} pt={1}>
					<IconButton onClick={() => {setFormDisabled(true)}}>
						<KeyboardBackspaceIcon />
					</IconButton>
				</Box>}
				{<FormBuilder
					disabled={formDisabled}
					handleSubmit={handleSubmit}
					title="Информация о студенте"
					fields={[
						{
							name: 'firstname_ru',
							label: 'Имя на русском',
							value: data.user.firstname,
							width: 1/3
						},
						{
							name: 'lastname_ru',
							label: 'Фамилия на русском',
							value: data.user.lastname,
							width: 1/3
						},
						{
							name: 'patronymic_ru',
							label: 'Отчество на русском',
							value: data.user.patronymic,
							required: false,
							width: 1/3
						},
						{
							name: 'firstname_kk',
							label: 'Имя на казахском',
							width: 1/3
						},
						{
							name: 'lastname_kk',
							label: 'Фамилия на казахском',
							width: 1/3
						},
						{
							name: 'patronymic_kk',
							label: 'Отчество на казахском',
							required: false,
							width: 1/3
						},
						{
							name: 'firstname_en',
							label: 'Имя на английском',
							width: 1/3
						},
						{
							name: 'lastname_en',
							label: 'Фамилия на английском',
							width: 1/3
						},
						{
							name: 'patronymic_en',
							label: 'Отчество на английском',
							required: false,
							width: 1/3
						},
						{
							name: 'birthdate',
							label: 'Дата рождения',
							required: false,
							type: 'date',
							value: data.user.birthdate, 
							width: 1/2
						},
						{
							name: 'iin',
							label: 'ИИН',
							required: false,
							value: data.user.iin, 
							width: 1/2
						},
						{
							name: 'diplom_num',
							label: '№ диплома',
						},
						{
							name: 'diplom_date',
							label: 'Дата выдачи диплома',
							type: 'date'
						},
						{
							name: 'protocol_num',
							label: 'Регистрационный номер',
						},
						{
							name: 'prev_educ_doc_name_kk',
							label: 'Предыдущий документ об образовании (каз)',
							required: false
						},
						{
							name: 'prev_educ_doc_name_ru',
							label: 'Предыдущий документ об образовании (рус)',
							required: false
						},
						{
							name: 'prev_educ_doc_name_en',
							label: 'Предыдущий документ об образовании (анг)',
							required: false
						},
						{
							name: 'entrance_doc_name_kk',
							label: 'Вступительный экзамен (каз)',
							required: false
						},
						{
							name: 'entrance_doc_name_ru',
							label: 'Вступительный экзамен (рус)',
							required: false
						},
						{
							name: 'entrance_doc_name_en',
							label: 'Вступительный экзамен (анг)',
							required: false
						},
						{
							name: 'entrance_doc_date',
							label: 'Дата вступительного экзамена',
							required: false,
							width: 1/3,
							type: 'date'
						},
						{
							name: 'start_year',
							label: 'Поступил(а)',
							required: false,
							width: 1/3
						},
						{
							name: 'finish_year',
							label: 'Закончил(а)',
							required: false,
							width: 1/3
						},
						{
							name: 'start_university_name_kk',
							label: 'Поступил(а) в университет (каз)',
							required: false
						},
						{
							name: 'start_university_name_ru',
							label: 'Поступил(а) в университет (рус)',
							required: false
						},
						{
							name: 'start_university_name_en',
							label: 'Поступил(а) в университет (анг)',
							required: false
						},
						{
							name: 'finish_university_name_kk',
							label: 'Закончил(а) в университет (каз)',
							required: false
						},
						{
							name: 'finish_university_name_ru',
							label: 'Закончил(а) в университет (рус)',
							required: false
						},
						{
							name: 'finish_university_name_en',
							label: 'Закончил(а) в университет (анг)',
							required: false
						},
						{
							name: 'credits',
							label: 'Количество кредитов',
							width: 1/3,
						},
						{
							name: 'ects_credits',
							label: 'Количество кредитов (ECTS)',
							width: 1/3,
						},
						{
							name: 'theoretical_credits',
							label: 'Количество кредитов теот. дисциплин',
							width: 1/3,
						},
						{
							name: 'theoretical_ects_credits',
							label: 'Количество кредитов теот. дисциплин (ECTS)',
							width: 1/2,
						},
						{
							name: 'gpa',
							label: 'GPA',
							width: 1/2,
						},
						{
							name: 'gak_protocol_num',
							label: 'SAC №',
							width: 1/2,
						},
						{
							name: 'gak_protocol_date',
							label: 'SAC дата',
							type: 'date',
							width: 1/2,
						},
						{
							name: 'academic_degree_name_kk',
							label: 'Академическая степень (каз)',
							required: false
						},
						{
							name: 'academic_degree_name_ru',
							label: 'Академическая степень (рус)',
							required: false
						},
						{
							name: 'academic_degree_name_en',
							label: 'Академическая степень (анг)',
							required: false
						},
						{
							name: 'speciality_name_kk',
							label: 'Специальность (каз)',
							required: false
						},
						{
							name: 'speciality_name_ru',
							label: 'Специальность (рус)',
							required: false
						},
						{
							name: 'speciality_name_en',
							label: 'Специальность (анг)',
							required: false
						},
						{
							name: 'specialization_name_kk',
							label: 'Образовательная программа (каз)',
							required: false
						},
						{
							name: 'specialization_name_ru',
							label: 'Образовательная программа (рус)',
							required: false
						},
						{
							name: 'specialization_name_en',
							label: 'Образовательная программа (анг)',
							required: false
						},
						{
							name: 'qualification_name_kk',
							label: 'Квалификация (каз)',
							required: false
						},
						{
							name: 'qualification_name_ru',
							label: 'Квалификация (рус)',
							required: false
						},
						{
							name: 'qualification_name_en',
							label: 'Квалификация (анг)',
							required: false
						}
					]} 
				/>}
				{formDisabled && <Box p={3}>
					<Button startIcon={<EditIcon />} variant="contained" size="large" onClick={() => {setFormDisabled(false)}}>Редактировать</Button>
				</Box>}
			</Box>
		</div>
	);
}
export default DiplomaSupplementItem;