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

function LearningOutcomesList(props){
	const classes = useStyles();
	const { getL } = useLang();

	const [addOpen, setAddOpen] = useState(false);
	const [editItem, setEditItem] = useState(false);
	const [items, setItems] = useState(props.outcomesList || []);

	const handleAddSubmit = (data) => {
		window.axios.post('edu_programs/'+props.programId+'/learning_outcomes', data)
			.then((response) => {
				setItems(response.data);
				setAddOpen(false);
			})
	}
	const handleEdit = (id) => {
		window.axios.get('learning_outcomes/'+id).then((response) => {
			setEditItem(response.data);
		});
	}
	const handleEditSubmit = (data) => {
		window.axios.post('learning_outcomes/'+editItem.id, data).then((response) => {
			setItems(response.data);
			setEditItem(false);
		});
	}
	return (
		<Box>
			<Button size="large" startIcon={<AddIcon />} onClick={() => {setAddOpen(true)}} variant="contained" color="secondary">
				Добавить результаты
			</Button>
			<Dialog open={addOpen} fullWidth maxWidth="md" onClose={() => {setAddOpen(false)}}>
				<FormBuilder 
					title="Добавить результаты обучения"
					fields={[
						{name: 'title_kk', label: 'Название на казахском языке'},
						{name: 'title_ru', label: 'Название на русском языке'},
						{name: 'title_en', label: 'Название на английском языке'},
						{name: 'code', label: 'Код результата обучения'}
					]}
					handleSubmit={handleAddSubmit}
				/>
			</Dialog>
			<Box mt={3}>
				<TableContainer component={Paper}>
					<Table>
						<TableHead>
							<TableRow>
								<TableCell>#</TableCell>
								<TableCell>Код результата обучения</TableCell>
								<TableCell>Название</TableCell>
								<TableCell></TableCell>
								<TableCell></TableCell>
							</TableRow>
						</TableHead>
						<TableBody>
							{items.map((list, index) => {
								return (
									<TableRow hover key={"outcome_"+index}>
										<TableCell>{list.id}</TableCell>
										<TableCell>{list.code}</TableCell>
										<TableCell>{list['title_'+getL]}</TableCell>
										<TableCell>
											<Button variant="outlined" onClick={() => {handleEdit(list.id)}} startIcon={<SettingsIcon />}>Редактировать</Button>
										</TableCell>
										<TableCell>
											<Button color="secondary" startIcon={<DeleteIcon />}>Удалить результат</Button>
										</TableCell>
									</TableRow>
								);
							})}
						</TableBody>
					</Table>
				</TableContainer>
				<Dialog open={Boolean(editItem)} fullWidth maxWidth="md" onClose={() => {setEditItem(false)}}>
					<FormBuilder 
						title={editItem['title_'+getL]}
						fields={[
							{name: 'title_kk', label: 'Название на казахском языке', value: editItem.title_kk},
							{name: 'title_ru', label: 'Название на русском языке', value: editItem.title_ru},
							{name: 'title_en', label: 'Название на английском языке', value: editItem.title_en},
							{name: 'code', label: 'Код результата обучения', value: editItem.code}
						]}
						handleSubmit={handleEditSubmit}
					/>
				</Dialog>
			</Box>
		</Box>
	);
}
export default LearningOutcomesList;