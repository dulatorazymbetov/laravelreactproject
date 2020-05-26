import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Paper from '@material-ui/core/Paper';
import Title from "@layouts/title";
import FormBuilder from "@layouts/form";

const useStyles = makeStyles(theme => ({
	
}));

function EditRespond(){
	const classes = useStyles();
	const [isLoading, setIsLoading] = useState(true);
	const [fields, setFields] = useState([]);
	useEffect(() => {
		window.axios.get('hr_orders/form').then((response) => {
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
					name: 'position_type_id',
					label: 'Должность',
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

export default EditRespond;