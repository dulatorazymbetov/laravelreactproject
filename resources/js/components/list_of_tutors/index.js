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

import { useLang } from "@contexts/lang";

const useStyles = makeStyles(theme => ({
	
}));

function StudyPlan(){
	const classes = useStyles();
	const [students, setStudents] = useState([]);
	const [isLoading, setIsLoading] = useState(true);
	const { getL } = useLang();

	useEffect(() => {
       	window.axios.get('students').then((response) => {
			setStudents(response.data);
			setIsLoading(false);
       	});
    }, []);

	return (
		<Box>
			<Title content="Список сотрудников" />
			{!isLoading && <Box mt={4}>
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
									<TableRow hover key={"student_"+user_index}>
										<TableCell>
											{(user_index + 1)}
										</TableCell>
										<TableCell>
											{user.lastname} {user.firstname} {user.patronymic}
										</TableCell>
										<TableCell>
											{user.student.study_status['description_'+getL]}
										</TableCell>
										<TableCell>
											{user.student.course}
										</TableCell>
									</TableRow>
								);
							})}
						</TableBody>
					</Table>
				</TableContainer>
			</Box>}
		</Box>
	);
}

export default StudyPlan;