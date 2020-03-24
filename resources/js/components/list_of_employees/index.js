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

import IconButton from '@material-ui/core/IconButton';
import PermContactCalendarIcon from '@material-ui/icons/PermContactCalendar';

import { useLang } from "@contexts/lang";

import Tutor from "./tutor.js";

const useStyles = makeStyles(theme => ({
	
}));

function StudyPlan(){
	const classes = useStyles();
	const [isLoading, setIsLoading] = useState(true);
	const [total, setTotal] = useState(0);
	const [tutors, setTutors] = useState([]);
	const [selectTutor, setSelectTutor] = useState(null);
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
	const refreshList = () => {
		getData(rowsPerPage, page);
	}
    async function getData(rows, page) {
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
                <Box p={2}>
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
                </Box>
				<TableContainer component={Paper}>
                    <Table>
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
                                <TableCell>
                                    
                                </TableCell>
							</TableRow>
						</TableHead>
						<TableBody>
							{tutors.map((tutor, tutor_index) => {
								return (
                                    <TableRow hover key={"tutor_"+tutor_index}>
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
                                        <TableCell>
                                            <IconButton onClick={() => {setSelectTutor(tutor.id)}} aria-label="Редактировать">
                                                <PermContactCalendarIcon />
                                            </IconButton>   
                                        </TableCell>
									</TableRow>
								);
							})}
						</TableBody>
					</Table>
				</TableContainer>
			</Box>}
			{selectTutor && <Tutor id={selectTutor} close={() => {setSelectTutor(null)}} refresh={refreshList}/>}
		</Box>
	);
}

export default StudyPlan;
