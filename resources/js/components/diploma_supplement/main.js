import React, { useState, useEffect } from "react";
import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Title from "@layouts/title";
import Table from '@material-ui/core/Table';
import TableBody from '@material-ui/core/TableBody';
import TableCell from '@material-ui/core/TableCell';
import TableContainer from '@material-ui/core/TableContainer';
import TableHead from '@material-ui/core/TableHead';
import TableRow from '@material-ui/core/TableRow';
import Paper from '@material-ui/core/Paper';
import TextField from '@material-ui/core/TextField';
import SaveIcon from '@material-ui/icons/Save';
import Button from '@material-ui/core/Button';
import { Link } from "react-router-dom";

import VisibilityIcon from '@material-ui/icons/Visibility';

const useStyles = makeStyles(theme => ({
	table: {
		minWidth: 650,
	},
	root: {
		'& .MuiTextField-root': {
		  marginRight: theme.spacing(1),
		  width: '25ch',
		},
	},
}));

function DiplomaSupplementMain(){
	const classes = useStyles();
	const [isLoading, setIsLoading] = useState(true);
	const [students, setStudents] = useState([]);


	useEffect(() => {
       	window.axios.get('diploma_supplement').then((response) => {
       		console.log(response.data);
			setStudents(response.data);
			setIsLoading(false);
       	});
    }, []);

    const rows = [
		createData('Социология', 0,	0, 'A-', 3.67, 'excellent'),
		createData('История современного Казахстана', 0, 0,	'A', 4, 'excellent'),
		createData('Экология и устойчивое развитие', 0,	0, 'B-', 2.67, 'good'),
		createData('Политология', 0, 0,	'A-', 3.67,	'excellent'),
		createData('Основы права', 0, 0, 'A', 4, 'excellent'),
		createData('Микроэкономика', 0,	0, 'A-', 3.67, 'excellent'),
		createData('Физвоспитание', 0, 0, 'A-', 3.67, 'excellent')
	];

	function createData(name, credit_count, ECTS, letter_mark, mark, trad_mark) {
		return { name, credit_count, ECTS, letter_mark, mark, trad_mark };
	}

	if(isLoading){return (<div />);}
	return (
		<Box>
			<Title content="Приложение к диплому" />
			<Box mt={3}>
				<TableContainer component={Paper}>
					<Table>
						<TableHead>
							<TableRow>
								<TableCell>№</TableCell>
								<TableCell>ID</TableCell>
								<TableCell>Имя</TableCell>
								<TableCell>Фамилия</TableCell>
								<TableCell>Отчество</TableCell>
								<TableCell>Действия</TableCell>
							</TableRow>
						</TableHead>
						<TableBody>
							{students.map((student, index) => {
								return (
									<TableRow hover key={"student_"+index}>
										<TableCell>{index+1}</TableCell>
										<TableCell>{student.user.login}</TableCell>
										<TableCell>{student.user.firstname}</TableCell>
										<TableCell>{student.user.lastname}</TableCell>
										<TableCell>{student.user.patronymic}</TableCell>
										<TableCell>
											<Button startIcon={<VisibilityIcon />} component={Link} to={'/diploma_supplement/'+student.id} variant='outlined'>Просмотреть</Button>
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

export default DiplomaSupplementMain;