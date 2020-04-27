import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Button from '@material-ui/core/Button';
import Dialog from '@material-ui/core/Dialog';
import Paper from '@material-ui/core/Paper';
import TableContainer from '@material-ui/core/TableContainer';
import Table from '@material-ui/core/Table';
import TableHead from '@material-ui/core/TableHead';
import TableBody from '@material-ui/core/TableBody';
import TableRow from '@material-ui/core/TableRow';
import TableCell from '@material-ui/core/TableCell';

import AddIcon from '@material-ui/icons/Add';
import SettingsIcon from '@material-ui/icons/Settings';
import DeleteIcon from '@material-ui/icons/Delete';

import FormBuilder from "@layouts/form";
import { useLang } from "@contexts/lang";

const useStyles = makeStyles(theme => ({
	
}));

function ProgramSubjectsList(props){
	const classes = useStyles();
	const { getL } = useLang();

	const [form, setForm] = useState({});
	const [addOpen, setAddOpen] = useState(false);
	const [editItem, setEditItem] = useState(false);
	const [items, setItems] = useState(props.outcomesList || []);

	const handleAddSubmit = (data) => {
		window.axios.post('edu_programs/'+props.programId+'/subjects', data)
			.then((response) => {
				setItems(response.data);
				setAddOpen(false);
			})
	}
	const handleEdit = (id) => {
		window.axios.get('program_subjects/'+id).then((response) => {
			setForm(response.data.form);
			setEditItem(response.data.item);
		});
	}
	const handleEditSubmit = (data) => {
		window.axios.post('program_subjects/'+editItem.id, data).then((response) => {
			setItems(response.data);
			setEditItem(false);
		});
	}
	const handleAddOpen = () => {
		window.axios.get('edu_program_subjects/form').then((response) => {
			setForm(response.data);
			setAddOpen(true);
		});
	}
	const fields = [
		{
			name: 'subject_id',
			label: 'Выберите дисциплину',
			type: 'select',
			value: editItem.subject_id,
			select: {
				items: form.subjects,
				label: 'title_'+getL,
				value: 'id',
				prefix_label: 'subject_code_'+getL
			}
		},
		{
			name: 'year',
			label: 'Курс изучения дисциплины',
			type: 'float',
			helper: 'Значение 0 предполагает изучение дисциплины в курсе по выбору обучающегося',
			value: editItem.year
		},
		{
			name: 'term',
			label: 'Семестр изучения дисциплины',
			type: 'float',
			helper: 'Значение «-3» предполагает изучение дисциплины в курсе по выбору обучающегося, значение 0 предполагает изучение дисциплины в дополнительном семестре',
			value: editItem.term
		},
		{
			name: 'ects_credits',
			label: 'Кредиты',
			type: 'float',
			value: editItem.ects_credits
		},
		{
			name: 'subject_cycle_id',
			label: 'Цикл дисциплины',
			type: 'select',
			value: editItem.subject_cycle_id,
			select: {
				items: form.subject_cycles,
				value: 'id',
				label: 'title_'+getL
			}
		},
		{
			name: 'is_university_subjects',
			label: 'Вузовский компонент',
			required: false,
			type: 'checkbox',
			value: editItem.is_university_subjects,
			width: 1/2
		},
		{
			name: 'is_selective',
			label: 'Дисциплина по выбору',
			required: false,
			type: 'checkbox',
			value: editItem.is_selective,
			width: 1/2
		},
		{
			name: 'control_form_id',
			label: 'Форма итоговой аттетстации по дисциплине в заданный период изучения дисциплины',
			type: 'select',
			value: editItem.control_form_id,
			select: {
				items: form.control_forms,
				label: 'title_'+getL,
				value: 'id'
			}
		},
		{
			name: 'exam_type_id',
			label: 'Форма проведения итоговой аттестации',
			type: 'select',
			value: editItem.exam_type_id,
			select: {
				items: form.control_forms,
				label: 'title_'+getL,
				value: 'id'
			}
		},
		{
			name: 'rating_count',
			label: 'Количество рейтинговых контролей по дисциплине в заданный период изучения дисциплины',
			value: editItem.rating_count,
			type: 'float'
		}
	];
	return (
		<Box>
			<Button size="large" startIcon={<AddIcon />} onClick={handleAddOpen} variant="contained" color="secondary">
				Добавить дисциплину
			</Button>
			<Dialog open={addOpen} fullWidth maxWidth="md" onClose={() => {setAddOpen(false)}}>
				<FormBuilder 
					title="Добавить дисциплину в обр. программу"
					fields={fields}
					handleSubmit={handleAddSubmit}
				/>
			</Dialog>
			<Box mt={3}>
				<TableContainer component={Paper}>
					<Table>
						<TableHead>
							<TableRow>
								<TableCell>#</TableCell>
								<TableCell>Код дисциплины</TableCell>
								<TableCell>Название</TableCell>
								<TableCell>Курс</TableCell>
								<TableCell></TableCell>
								<TableCell></TableCell>
							</TableRow>
						</TableHead>
						<TableBody>
							{items.map((list, index) => {
								return (
									<TableRow hover key={"outcome_"+index}>
										<TableCell>{list.id}</TableCell>
										<TableCell>{list.subject['subject_code_'+getL]}</TableCell>
										<TableCell>{list.subject['title_'+getL]}</TableCell>
										<TableCell>{list.year}</TableCell>
										<TableCell>
											<Button variant="outlined" onClick={() => {handleEdit(list.id)}} startIcon={<SettingsIcon />}>Редактировать</Button>
										</TableCell>
										<TableCell>
											<Button color="secondary" startIcon={<DeleteIcon />}>Удалить</Button>
										</TableCell>
									</TableRow>
								);
							})}
						</TableBody>
					</Table>
				</TableContainer>
				<Dialog open={Boolean(editItem)} fullWidth maxWidth="md" onClose={() => {setEditItem(false)}}>
					<FormBuilder 
						title="Редактировать добавленную дисциплину"
						fields={fields}
						handleSubmit={handleEditSubmit}
					/>
				</Dialog>
			</Box>
		</Box>
	);
}
export default ProgramSubjectsList;