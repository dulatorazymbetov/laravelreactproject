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
import Button from '@material-ui/core/Button';

const useStyles = makeStyles(theme => ({
	
}));

function StudyPlan(){
	const classes = useStyles();
	const [students, setStudents] = useState([]);
	useEffect(() => {
       	window.axios.get('students').then((response) => {
       		setStudents(response.data);
       	});
    }, []);

	return (
		<Box>
			<Title content="Список студентов" />
			<Box mt={4}>
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
							</TableRow>
						</TableHead>
						<TableBody>
							{students.map((student, student_index) => {
								return (
									<TableRow hover key={"student_"+student_index}>
										<TableCell>
											{(student_index + 1)}
										</TableCell>
										<TableCell>
											{student.lastname} {student.firstname} {student.patronymic}
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

export default StudyPlan;