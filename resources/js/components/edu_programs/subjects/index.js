import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Button from '@material-ui/core/Button';
import Dialog from '@material-ui/core/Dialog';

import AddIcon from '@material-ui/icons/Add';

import FormBuilder from "@layouts/form";
import TableBuilder from "@layouts/table";
import { useLang } from "@contexts/lang";

const useStyles = makeStyles(theme => ({
	
}));

function SubjectsList(props){
	const classes = useStyles();
	const { getL } = useLang();
	
	const [addOpen, setAddOpen] = useState(false);
	const [editItem, setEditItem] = useState(false);

	const [form, setForm] = useState({});
	const [refreshDate, setRefreshDate] = useState(new Date);
	
	useEffect(() => {

    }, []);


	const handleAddSubmit = (data) => {
		setAddOpen(false);
		window.axios.post('subjects', data).then((response) => {
			setRefreshDate(new Date);
		})
	}
	const handleEditSubmit = (data) => {
		window.axios.post('subjects/'+editItem.id, data).then((response) => {
			setEditItem(false);
			setRefreshDate(new Date);
		})
	}
	const handleAddOpen = () => {
		window.axios.get('subjects/form').then((response) => {
			setForm(response.data);
			setAddOpen(true);
		});
	}
	const handleEdit = (id) => {
		window.axios.get('subjects/'+id).then((response) => {
			setForm(response.data.form);
			setEditItem(response.data.items);
		});
	}
	const deleteSubject = (id) => {
		window.axios.delete('subjects/'+id).then((response) => {
			setRefreshDate(new Date);
		});
	}
	const fields = [
		{name: 'title_kk', label: 'Название на казахском языке', value: editItem.title_kk},
		{name: 'title_ru', label: 'Название на русском языке', value: editItem.title_ru},
		{name: 'title_en', label: 'Название на английском языке', value: editItem.title_en},
		{name: 'subject_code_kk', label: 'Код дисциплины на казахском языке', value: editItem.subject_code_kk, readOnly: Boolean(editItem.subject_code_kk)},
		{name: 'subject_code_ru', label: 'Код дисциплины на русском языке', value: editItem.subject_code_ru, readOnly: Boolean(editItem.subject_code_ru)},
		{name: 'subject_code_en', label: 'Код дисциплины на английском языке', value: editItem.subject_code_en, readOnly: Boolean(editItem.subject_code_en)},
		{name: 'description_kk', label: 'Краткое описание дисциплины на казахском языке', value: editItem.description_kk},
		{name: 'description_ru', label: 'Краткое описание дисциплины на русском языке', value: editItem.description_ru},
		{name: 'description_en', label: 'Краткое описание дисциплины на английском языке', value: editItem.description_en},
		{
			name: 'degree_id', 
			label: 'Академическая степень, для которой предусмотрена дисциплина',
			type: 'select',
			select: {label: 'title_'+getL,value: 'id',items: form.degree}, 
			value: editItem.degree_id
		},
		{
			name: 'department_id',
			label: 'Кафедра',
			type: 'select',
			select: {
				label: 'title_'+getL,
				value: 'id',
				items: form.departments
			},
			value: editItem.department_id
		},
		{
			name: 'ects_credits',
			label: 'Кредиты',
			type: 'float',
			value: editItem.ects_credits
		},
		{
			name: 'is_language_discipline',
			label: 'Языковая дисциплина',
			type: 'checkbox',
			required: false,
			width: 1/2, 
			value: editItem.is_language_discipline
		},
		{
			name: 'is_multilingual',
			label: 'Полиязычная дисциплина',
			type: 'checkbox',
			required: false,
			width: 1/2, 
			value: editItem.is_multilingual
		},
		{
			name: 'is_research',
			label: 'Научно-исследовательская дисциплина',
			type: 'checkbox',
			required: false,
			width: 1/2, 
			value: editItem.is_research
		},
		{
			name: 'is_practice',
			label: 'Практика',
			type: 'checkbox',
			required: false,
			width: 1/2, 
			value: editItem.is_practice
		},
		{
			name: 'is_additional',
			label: 'Дополнительная дисциплина',
			type: 'checkbox',
			required: false,
			value: editItem.is_additional
		},
	];

	return (
		<Box mt={4}>
			<Button size="large" startIcon={<AddIcon />} onClick={handleAddOpen} variant="contained" color="secondary">
				Новая дисциплина
			</Button>
			<Dialog open={addOpen} fullWidth maxWidth="md" onClose={() => {setAddOpen(false)}}>
				<FormBuilder 
					title="Добавить дисциплину"
					handleSubmit={handleAddSubmit}
					fields={fields}
				/>
			</Dialog>
			<Box mt={3}>
				<TableBuilder 
					rows={[
						{label: 'Код дисциплины', value: 'subject_code_'+getL},
						{label: 'Название', value: 'title_'+getL},
						{
							label: 'Кафедра', 
							value: row => row.department ? row.department['title_'+getL] : '-'
						},
						{
							label: 'Редактирование',
							type: 'action',
							action: {
								handle: handleEdit, 
								param: 'id', 
								label: 'Редактировать', 
								variant: 'outlined', 
								icon: 'settings'
							}
						},
						{
							label: 'Удаление', 
							type: 'action',
							action: { 
								handle: deleteSubject, 
								param: 'id', 
								label: 'Удалить', 
								color: 'secondary', 
								icon: 'delete_outline',
								confirm: "Вы уверены, что хотите удалить данную дисциплину?"
							}
						}
					]}
					url="subjects"
					refreshDate={refreshDate}
				/>
			</Box>
			<Dialog open={Boolean(editItem)} fullWidth maxWidth="md" onClose={() => {setEditItem(false)}}>
				<FormBuilder 
					title="Добавить дисциплину"
					handleSubmit={handleEditSubmit}
					fields={fields}
				/>
			</Dialog>
		</Box>
	);
}
export default SubjectsList;