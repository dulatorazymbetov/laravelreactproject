import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Paper from '@material-ui/core/Paper';
import Title from "@layouts/title";
import CountCard from "@layouts/card";

import TableContainer from '@material-ui/core/TableContainer';
import Table from '@material-ui/core/Table';
import TableHead from '@material-ui/core/TableHead';
import TableBody from '@material-ui/core/TableBody';
import TableRow from '@material-ui/core/TableRow';
import TableCell from '@material-ui/core/TableCell';

import Button from '@material-ui/core/Button';
import TextField from '@material-ui/core/TextField';

import Dialog from '@material-ui/core/Dialog';
import DialogActions from '@material-ui/core/DialogActions';
import DialogContent from '@material-ui/core/DialogContent';
import DialogContentText from '@material-ui/core/DialogContentText';
import DialogTitle from '@material-ui/core/DialogTitle';

import { useLang } from "@contexts/lang";

const useStyles = makeStyles(theme => ({
	
}));

function StudyPlan(){
	const classes = useStyles();
	const [students, setStudents] = useState([]);
	const [dialogOpen, setDialogOpen] = useState(false);
	const [dialogUser, setDialoguser] = useState([]);
	const [isLoading, setIsLoading] = useState(true);
	const { getL } = useLang();

	useEffect(() => {
       	window.axios.get('students').then((response) => {
			setStudents(response.data);
			setIsLoading(false);
       	});
    }, []);

	const showDialog = (index) => {
		setDialoguser(students[index]);
		setDialogOpen(true);
	}
	const dialogClose = () => {
		setDialogOpen(false);
	}

	return (
		<Box>
			<Title content="Список студентов" />
			{!isLoading && <Box mt={4}>
				<Box mb={4}>
					<CountCard items={[
						{count: 4074, title: 'Студентов'},
					]} />
				</Box>
				<TableContainer component={Paper}>
					<Table stickyHeader>
						<TableHead>
							<TableRow>
								<TableCell>
									#
								</TableCell>
								<TableCell>
									ФИО
								</TableCell>
								<TableCell>
									Статус
								</TableCell>
								<TableCell>
									Курс
								</TableCell>
							</TableRow>
						</TableHead>
						<TableBody>
							{students.map((user, user_index) => {
								return (
									<TableRow style={{cursor: 'pointer'}} hover key={"student_"+user_index} onClick={() => {showDialog(user_index)}}>
										<TableCell>
											{(user_index + 1)}
										</TableCell>
										<TableCell>
											{user.user.lastname} {user.user.firstname} {user.user.patronymic}
										</TableCell>
										<TableCell>
											{user.study_status['description_'+getL]}
										</TableCell>
										<TableCell>
											{user.course}
										</TableCell>
									</TableRow>
								);
							})}
						</TableBody>
					</Table>
				</TableContainer>
			</Box>}
			<Dialog open={dialogOpen} onClose={dialogClose} aria-labelledby="form-dialog-title">
		        <DialogTitle id="form-dialog-title">{dialogUser.lastname} {dialogUser.firstname} {dialogUser.patronymic}</DialogTitle>
		        <DialogContent>
		          	<DialogContentText>
		            	Редактировать профиль
		          	</DialogContentText>
		          	<TextField
		            	margin="dense"
		            	id="name"
		            	label="Email Address"
		            	type="email"
		            	fullWidth
		            	defaultValue={dialogUser.email}
		          	/>
		          	<TextField
		            	margin="dense"
		            	id="name"
		            	label="Дата рождения"
		            	type="email"
		            	fullWidth
		            	defaultValue={dialogUser.birthdate}
		          	/>
		          	<TextField
		            	margin="dense"
		            	id="name"
		            	label="ИИН"
		            	type="email"
		            	fullWidth
		            	defaultValue={dialogUser.iin}
		          	/>
		        </DialogContent>
		        <DialogActions>
		          	<Button onClick={dialogClose} color="primary">
		            	Сохранить
		          	</Button>
		          	<Button onClick={dialogClose} color="primary">
		            	Закрыть
		          	</Button>
		        </DialogActions>
		    </Dialog>
		</Box>
	);
}

export default StudyPlan;