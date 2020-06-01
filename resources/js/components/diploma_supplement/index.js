import React, { useState, useEffect } from "react";
import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Title from "@layouts/title";
import MaterialTable, { MTableToolbar } from 'material-table';
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

function DiplomaSupplement(){
	const classes = useStyles();
	const [isLoading, setIsLoading] = useState(true);
	const [students, setStudents] = useState([]);


	useEffect(() => {
       	window.axios.get('graduates').then((response) => {
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

    const data = students.map((student, index) => (
		{
			index: index + 1,
			id: student.id,
			login: student.user.login,
			name: student.user.firstname,
			surname: student.user.lastname,
			patronymic: student.user.patronymic,
			birthdate: student.user.birthdate,
			iin: student.user.iin,
			status: student.study_status.description_ru,
			// form: student.study_form.description_ru
		}
	))
	

	return (
		<Box>
			<Title content="Приложение к диплому" />
			{!isLoading && <Box mt={3}>
				<Paper elevation={3}>
					<MaterialTable
			      		title="Список студентов"
			      		localization={{
			      			body: {
			      				emptyDataSourceMessage: "Не найдено"
			      			},
		                    toolbar: {
		                        searchPlaceholder: "Поиск",
		                        searchTooltip: "Поиск",
		                        exportTitle: "Скачать",
		                        exportName: "Скачать как CSV"
		                    },
		                    pagination: {
		                    	labelRowsSelect: "строк",
		                    	labelDisplayedRows: "{from}-{to} из {count}",
		                    	firstTooltip: "Первая страница",
		                    	previousTooltip: "Предыдущая страница",
		                    	nextTooltip: "Следующая страница",
		                    	lastTooltip: "Последняя страница"
		                    }
		                }}
			      		columns={[
			      			{ title: '№', field: 'index' },
			      			{ title: 'ID', field: 'login' },
					        { title: 'Имя', field: 'name' },
					        { title: 'Фамилия', field: 'surname' },
					        { title: 'Отчество', field: 'patronymic' },
					        { title: 'Дата рождения', field: 'birthdate', type: 'date' },
			      			{ title: 'ИИН', field: 'iin' },
					        { title: 'Статус студента', field: 'status' },
					        // { title: 'Академическая степень', field: 'form'}
		      			]}
				      	data=
				      	{
				      		data
			      		}
				      	detailPanel =
				      	{[
			      			{
					      		icon: 'description',
						      	render: rowData => {
					      			return (
					      				<Box m={3}>
					      					<Box>
					      						<form className={classes.root} noValidate autoComplete="off">
						      						<TextField
														id="outlined"
														label="Имя"
														defaultValue={rowData.name}
														variant="outlined"
													/>
													<TextField
														id="outlined"
														label="Фамилия"
														defaultValue={rowData.surname}
														variant="outlined"
													/>
													<TextField
														id="outlined"
														label="Отчество"
														defaultValue={rowData.patronymic}
														variant="outlined"
													/>
													<TextField
														InputLabelProps={{ shrink: true }}									
														id="outlined"
														label="Дата рождения"
														defaultValue={rowData.birthdate}
														type="date"
														variant="outlined"
													/>
													<TextField									
														id="outlined"
														label="ID Студента"
														defaultValue={rowData.login}
														variant="outlined"
													/>
												</form>
					      					</Box>
					      					<Paper elevation={3}>
						      					<Box mt={3}>
							      					<TableContainer>
												      <Table className={classes.table} aria-label="simple table">
												        <TableHead>
												          <TableRow>
												            <TableCell>Названия дисциплины</TableCell>
												            <TableCell align="right">Кол-во кредитов</TableCell>
												            <TableCell align="right">ECTS</TableCell>
												            <TableCell align="right">Буква</TableCell>
												            <TableCell align="right">Цифра</TableCell>
												            <TableCell align="right">Традиц.</TableCell>
												          </TableRow>
												        </TableHead>
												        <TableBody>
												          {rows.map((row) => (
												            <TableRow key={row.name}>
												              <TableCell component="th" scope="row">
												                {row.name}
												              </TableCell>
												              <TableCell align="right">{row.credit_count}</TableCell>
												              <TableCell align="right">{row.ECTS}</TableCell>
												              <TableCell align="right">{row.letter_mark}</TableCell>
												              <TableCell align="right">{row.mark}</TableCell>
												              <TableCell align="right">{row.trad_mark}</TableCell>
												            </TableRow>
												          ))}
												        </TableBody>
												      </Table>
												    </TableContainer>
											    </Box>
											</Paper>
											<Box mt={3}>
										    	<Button
										    		href={'/downloadDiplomaSupplement/' + rowData.id }
											        variant="contained"
											        color="primary"
											        size="small"
											        startIcon={<SaveIcon />}
										      	>
											    	Скачать
										      	</Button>
										    </Box>
					      				</Box>
									);
							    }
							},
						]}
						components={{
					        Toolbar: props => (
					            <div style={{  }}>
					                <MTableToolbar {...props} />
					            </div>
					        )
					    }}
					    options={{
				      		exportButton: true
					    }}
				    />
				</Paper>
			</Box>}
		</Box>
	);
}

export default DiplomaSupplement;