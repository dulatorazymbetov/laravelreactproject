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
import InputLabel from '@material-ui/core/InputLabel';
import MenuItem from '@material-ui/core/MenuItem';
import FormControl from '@material-ui/core/FormControl';
import Select from '@material-ui/core/Select';
import Button from '@material-ui/core/Button';


const useStyles = makeStyles(theme => ({
	formControl: {
	    minWidth: 250,
	},
	selectEmpty: {
	    marginTop: theme.spacing(2),
	},
}));

function StudyPlan(){
	const classes = useStyles();
	const [age, setAge] = React.useState('');
	const [users, setUsers] = useState();

	const inputLabel = React.useRef(null);
	const [labelWidth, setLabelWidth] = React.useState(0);

	useEffect(() => {
   		window.axios('/auth').then((response) => {
    		setUsers(response.data);
    		console.log(response.data.id)
    	});
    }, []);

	const handleChange = event => {
		setAge(event.target.value);
	};

	return (
		<Box>
			<Title content="Журнал справок" />
			<Box mt={3}>
				<Box>
					<Box>
						<FormControl className={classes.formControl}>
					        <InputLabel id="demo-simple-select-label">Вид справки</InputLabel>
					        <Select
					          labelId="demo-simple-select-label"
					          id="demo-simple-select"
					          value={age}
					          onChange={handleChange}
					        >
					          <MenuItem value={1}>Справка с места учёбы</MenuItem>
					          <MenuItem value={2}>Приложение 2-1</MenuItem>
					          <MenuItem value={3}>Приложение 4</MenuItem>
					          <MenuItem value={4}>Приложение 6</MenuItem>
					          <MenuItem value={5}>Приложение 8</MenuItem>
					          <MenuItem value={6}>Приложение 9</MenuItem>
					        </Select>
		      			</FormControl>
					</Box>
					<Box mt={2}><Button variant="contained" color="primary">Скачать</Button></Box>
				</Box>
				<Box><p>{age}.</p></Box>
				<a href="/downloadReport{age}PDF/5">Download PDF</a>
				{/*<Box mt={3}>
					<TableContainer component={Paper}>
						<Table stickyHeader>
							<TableHead>
								<TableRow>
									<TableCell>
										ID
									</TableCell>
									<TableCell>
										Название справки
									</TableCell>
									<TableCell>
										Дата выдачи
									</TableCell>
								</TableRow>
							</TableHead>
							<TableBody>
								
							</TableBody>
						</Table>
					</TableContainer>
				</Box>*/}
			</Box>										
		</Box>
	);
}

export default StudyPlan;