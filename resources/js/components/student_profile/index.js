import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Paper from '@material-ui/core/Paper';
import Title from "@layouts/title";
import FormBuilder from "@layouts/form";

const useStyles = makeStyles(theme => ({
	
}));

function EditProfile(){
	const classes = useStyles();
	const [isLoading, setIsLoading] = useState(true);
	const [fields, setFields] = useState([]);
	useEffect(() => {
		window.axios.get('student_profile/form').then((response) => {
			setFields([
				{
					name: 'lastname',
					label: 'Фамилия'
				},
				{
					name: 'firstname',
					label: 'Имя'
				},
				{
					name: 'patronymic',
					label: 'Отчество'
				},
				{
					name: 'E-mail',
					label: 'E-mail'
				},
				{
					name: 'phone',
					label: 'Номер контакного телефона'
				},
				{
					name: 'birth_date',
					type: 'date',
					label: 'Дата рождения'
				},
				{
					name: 'gender_id',
					label: 'Пол',
					type: 'select',
					select: {
						items: response.data.staff_type,
						label: 'description_kk',
						value: 'id'
					}
				}
			]);
			setIsLoading(false);
		})
    }, []);

	const handleSubmit = (data) => {
		alert('Данные получены');
	}
	if(isLoading){
		return <div />;
	}
	return (
		<Box>
			<Title content="Загрузка..." />
			<Box mt={4} p={4} component={Paper}>
				<FormBuilder title="Новая форма" fields={fields} handleSubmit={handleSubmit}/>
			</Box>
		</Box>
	);
}

export default EditProfile;