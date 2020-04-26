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

function SubjectsList(props){
	const classes = useStyles();
	const { getL } = useLang();

	const [isLoading, setIsLoading] = useState(true);
	const [addOpen, setAddOpen] = useState(false);
	const [form, setForm] = useState({});
	const [items, setItems] = useState([]);

	useEffect(() => {
       	window.axios.get('subjects').then((response) => {
       		setForm(response.data.form);
       		setItems(response.data.items);
       		setIsLoading(false);
       	});
    }, []);

	if(isLoading){return (<div/>);}

	const handleSubmit = (data) => {
		window.axios.post('subjects', data).then((response) => {
			setItems(response.data);
		})
	} 
	const handleEdit = () => {}

	return (
		<Box mt={4}>
			<Button size="large" startIcon={<AddIcon />} onClick={() => {setAddOpen(true)}} variant="contained" color="secondary">
				Новая дисциплина
			</Button>
			<Dialog open={addOpen} fullWidth maxWidth="md" onClose={() => {setAddOpen(false)}}>
				<FormBuilder 
					title="Добавить дисциплину"
					handleSubmit={handleSubmit}
					fields={[
						{name: 'title_kk', label: 'Название на казахском языке'},
						{name: 'title_ru', label: 'Название на русском языке'},
						{name: 'title_en', label: 'Название на английском языке'},
						{name: 'subject_code_kk', label: 'Код дисциплины на казахском языке'},
						{name: 'subject_code_ru', label: 'Код дисциплины на русском языке'},
						{name: 'subject_code_en', label: 'Код дисциплины на английском языке'},
						{name: 'description_kk', label: 'Краткое описание дисциплины на казахском языке'},
						{name: 'description_ru', label: 'Краткое описание дисциплины на русском языке'},
						{name: 'description_en', label: 'Краткое описание дисциплины на английском языке'},
						{
							name: 'degree_id', 
							label: 'Академическая степень, для которой предусмотрена дисциплина',
							type: 'select',
							select: {label: 'title_'+getL,value: 'id',items: form.degree}
						},
						{
							name: 'is_language_discipline',
							label: 'Языковая дисциплина',
							type: 'checkbox',
							required: false,
							width: 1/2
						},
						{
							name: 'is_multilingual',
							label: 'Полиязычная дисциплина',
							type: 'checkbox',
							required: false,
							width: 1/2
						},
						{
							name: 'is_research',
							label: 'Научно-исследовательская дисциплина',
							type: 'checkbox',
							required: false,
							width: 1/2
						},
						{
							name: 'is_practice',
							label: 'Практика',
							type: 'checkbox',
							required: false,
							width: 1/2
						}
					]}
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
								<TableCell></TableCell>
								<TableCell></TableCell>
							</TableRow>
						</TableHead>
						<TableBody>
						{items.map((list, index) => {
							return (
								<TableRow hover key={"subject_"+index}>
									<TableCell>{list.id}</TableCell>
									<TableCell>{list['subject_code_'+getL]}</TableCell>
									<TableCell>{list['title_'+getL]}</TableCell>
									<TableCell>
										<Button variant="outlined" onClick={() => {handleEdit(list.id)}} startIcon={<SettingsIcon />}>Редактировать</Button>
									</TableCell>
									<TableCell>
										<Button color="secondary" startIcon={<DeleteIcon />}>Удалить дисциплину</Button>
									</TableCell>
								</TableRow>
							);
						})}
					</TableBody>
					</Table>
				</TableContainer>
			</Box>
		</Box>
	);
}
export default SubjectsList;