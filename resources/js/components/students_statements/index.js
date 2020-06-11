import React, { useState, useEffect } from "react";

import Box from '@material-ui/core/Box';
import Button from '@material-ui/core/Button';
import Dialog from '@material-ui/core/Dialog';
import Paper from '@material-ui/core/Paper';
import Divider from '@material-ui/core/Divider';

import AddIcon from '@material-ui/icons/Add';

import Title from "@layouts/title";
import FormBuilder from "@layouts/form";

function StudentsState(props){
	const [addForm, setAddForm] = useState(false);

	return (
		<Box>
			<Title content="Исходящие заявки" />
			<Box mt={4}>
				<Button 
					variant="contained" 
					color="secondary" 
					startIcon={<AddIcon />} 
					size="large"
					onClick={() => {setAddForm(true)}}
				>
					Обходной лист
				</Button>
			</Box>
			<Dialog
				open={addForm}
				fullWidth
				maxWidth="md"
				onClose={() => {setAddForm(false)}}
			>
				<FormBuilder 
					title="Новый обходной лист"
					fields={[
						{
							label: 'Пойдете ли Вы на Graduation (вручение диплома)?',
							type: 'checkbox',
							name: 'graduation'
						},
						{
							label: 'Телефон:',
							mask: '+ 7 (999) 999 99 99',
							name: 'tel'
						},
						{
							label: 'Дополнительные сведения',
							name: 'additional',
							required: false,
							multiline: 4
						}
					]}
				/>
			</Dialog>
			<Box mt={4}>
				<Box component={Paper} p={4}>
					<Box fontWeight="bold" fontSize={16} mb={2}>
						Обходной лист от 11.06.2020
					</Box>
					<Box mb={2}>
						Статус: На рассмотрении (Библиотека)
					</Box>
					<Divider />
					<Box style={{color: '#777'}} mt={2}>
						Офис регистратор: Пройдено<br/>
						Бухгалтерия: Пройдено
					</Box>
				</Box>
			</Box>
		</Box>
	);
}
export default StudentsState;