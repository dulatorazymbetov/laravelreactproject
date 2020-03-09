import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Paper from '@material-ui/core/Paper';
import Title from "@layouts/title";

import TableContainer from '@material-ui/core/TableContainer';
import Table from '@material-ui/core/Table';
import TableHead from '@material-ui/core/TableHead';
import TableBody from '@material-ui/core/TableBody';
import TableRow from '@material-ui/core/TableRow';
import TableCell from '@material-ui/core/TableCell';
import TablePagination from '@material-ui/core/TablePagination';

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
	const [isLoading, setIsLoading] = useState(true);
	const [total, setTotal] = useState(0);
	const [tutors, setTutors] = useState([]);
	const [page, setPage] = useState(0);
	const [rowsPerPage, setRowsPerPage] = useState(15);
	const { getL } = useLang();

	const handleChangePage = (event, newPage) => {
		setPage(newPage);
		getData(rowsPerPage, newPage);
	}

	const handleChangeRowsPerPage = (event) => {
		const newValue = parseInt(event.target.value, 10);
		setRowsPerPage(newValue);
		setPage(0);
		getData(newValue, 0);
	}

	const getData = (rows, page) => {
		window.axios.get('tutors', {
			params: {rows: rows,page: page}
		}).then((response) => {
			setTutors(response.data.list);
			setTotal(response.data.total);
			setIsLoading(false);
       	});
	}
	useEffect(() => {
		getData(rowsPerPage, page);
	}, []);
	
	return (
		<Box>
			<Title content="Список Преподавателей" />
			{!isLoading && <Box mt={4}>
				<Box my={2}>
					Найдено: {total}
				</Box>
				<TableContainer component={Paper}>
					<Table stickyHeader>
						<TableHead>
							<TableRow>
								<TableCell>
									#
								</TableCell>
								<TableCell>
									Учетная запись
								</TableCell>
								<TableCell>
									ФИО
								</TableCell>
								<TableCell>
									Уч. Степень
								</TableCell>
								<TableCell>
									Уч. Звание
								</TableCell>
							</TableRow>
						</TableHead>
						<TableBody>
							{tutors.map((tutor, tutor_index) => {
								return (
									<TableRow style={{cursor: 'pointer'}} hover key={"tutor_"+tutor_index}>
										<TableCell>
											{tutor.id}
										</TableCell>
										<TableCell>
											{tutor.user.login}
										</TableCell>
										<TableCell>
											{tutor.user.lastname} {tutor.user.firstname} {tutor.user.patronymic}
										</TableCell>
										<TableCell>
											{tutor.academic_degree['description_'+getL]}
										</TableCell>
										<TableCell>
											{tutor.academic_rank['description_'+getL]}
										</TableCell>
										
									</TableRow>
								);
							})}
						</TableBody>
					</Table>
					<TablePagination
          				rowsPerPageOptions={[15, 25, 50]}
          				component="div"
          				count={total}
          				rowsPerPage={rowsPerPage}
						page={page}
						labelRowsPerPage="Сотрудников на страницу"
						labelDisplayedRows={({ from, to, count }) => `${from}-${to} из ${count}`}
          				onChangePage={handleChangePage}
          				onChangeRowsPerPage={handleChangeRowsPerPage}
        			/>
				</TableContainer>
			</Box>}
		</Box>
	);
}

export default StudyPlan;