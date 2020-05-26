import React, { useState, useEffect } from "react";
import { makeStyles } from '@material-ui/core/styles';

import Box from '@material-ui/core/Box';
import Paper from '@material-ui/core/Paper';
import Button from '@material-ui/core/Button';
import Dialog from '@material-ui/core/Dialog';

import SettingsIcon from '@material-ui/icons/Settings';
import AddIcon from '@material-ui/icons/Add';

import Title from '@layouts/title';
import FormBuilder from '@layouts/form';
import TableBuilder from "@layouts/table";
import { useLang } from "@contexts/lang";

const useStyles = makeStyles(theme => ({
	title: {
		flex: '0 0 auto',
		fontWeight: '900',
		fontSize: '1.45rem'
	},
}));

function StaffItem(props){
	const classes = useStyles();
	const [data, setData] = useState({});
	const [form, setForm] = useState({});
	const [formDisabled, setFormDisabled] = useState(true);
	const [openAddPosition, setOpenAddPosition] = useState(false);
	const [isLoading, setIsLoading] = useState(true);

	const { getL } = useLang();

	useEffect(() => {
		getData(props.id);
	}, []);

	const getData = (id) => {
		window.axios.get('list_of_staff/'+id).then((response) => {
			setData(response.data.item);
			setForm(response.data.form);
			setIsLoading(false);
		});
	}
	const handleEditSubmit = () => {

	}

	if(isLoading) return (<div />);

	return (
		<Box>
			<Title 
				content={data.user.lastname + " " + data.user.firstname + " " + data.user.patronymic}
				tree={[
					{link: '/list_of_staff', name: 'Сотрудники'},
					{name: 'Редактировать профиль'}
				]}
			/>
			<Box component={Paper} mt={4} >
				<FormBuilder
					disabled={formDisabled}
					title="Редактировать профиль"
					fields={[
						{ label: 'Фамилия', name: 'lastname', value: data.user.lastname },
						{ label: 'Имя', name: 'firstname', value: data.user.firstname },
						{ label: 'Отчество', name: 'patronymic', value: data.user.patronymic, required: false },
						{
							label: 'Академ. степень',
							name: 'academic_degree',
							type: 'select',
							value: data.academic_degree_id,
							width: 1/2,
							select: { items: form.academic_degree, label: 'title_'+getL, value: 'id' }
						},
						{
							label: 'Ученое звание',
							name: 'academic_rank',
							type: 'select',
							value: data.academic_rank_id,
							width: 1/2,
							select: { items: form.academic_rank, label: 'description_'+getL, value: 'id' }
						},
						{
							label: 'Уровень английского языка',
							name: 'english_level',
							type: 'select',
							value: data.english_level_id,
							width: 1/2,
							select: { items: form.english_level, label: 'description_'+getL, value: 'id' }
						},
						{
							label: 'Иностранный сотрудник',
							name: 'is_foreign',
							value: data.is_foreign,
							type: 'checkbox',
							width: 1/2
						}
					]}
					handleSubmit={handleEditSubmit}
				/>
				{formDisabled && <Box p={3}>
					<Button 
						startIcon={<SettingsIcon />} 
						variant="contained" 
						size="large" 
						onClick={() => {setFormDisabled(false)}}
					>
						Редактировать
					</Button>
				</Box>}
			</Box>
			<Box mt={5}>
				<Box className={classes.title} mb={4}>
					Занимаемые должности
				</Box>
				<Box mb={2}>
					<Button 
						variant="contained" 
						size="large"
						color="secondary"
						startIcon={<AddIcon />}
						onClick={() => {setOpenAddPosition(true)}}
					>
						Добавить должность
					</Button>
				</Box>
				<Dialog open={openAddPosition} fullWidth maxWidth="md" onClose={() => {setOpenAddPosition(false)}}>
					<FormBuilder 
						title="Добавить новую должность"
						fields={[
							{
								label: 'Должность',
								name: 'position_type',
								type: 'select',
								width: 1/2,
								select: {
									items: form.position_type,
									label: 'description_'+getL,
									value: 'id'
								}
							},
							{
								label: 'Подразделение',
								name: 'department',
								type: 'select',
								width: 1/2,
								select: {
									items: form.department,
									label: 'title_'+getL,
									value: 'id'
								}
							},
							{
								label: 'Условия найма',
								name: 'position_time_type',
								type: 'select',
								width: 1/2,
								select: {
									items: form.position_time_type,
									label: 'title_'+getL,
									value: 'id'
								}
							},
							{
								label: 'Ставка',
								name: 'time_rate',
								type: 'float',
								width: 1/2
							},
							{
								label: 'Дата начала работы',
								name: 'start_date',
								type: 'date',
								width: 1/2
							},
							{
								label: 'Дата окончания работы',
								name: 'finish_date',
								type: 'date',
								required: false,
								width: 1/2
							},
							{
								label: 'Воглавляет данное подразделение',
								name: 'is_head',
								type: 'checkbox',
								required: false
							}
						]}
					/>
				</Dialog>
				<TableBuilder 
					url={"list_of_staff/"+data.id+'/positions'}
					rows={[
						{
							label: 'Название',
							value: ''
						}
					]}
				/>
			</Box>
		</Box>
	);
}

export default StaffItem;
