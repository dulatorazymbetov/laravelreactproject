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
	const [type, setType] = useState('');
	const [userID, setUserID] = useState('');

	const inputLabel = React.useRef(null);
	const [labelWidth, setLabelWidth] = React.useState(0);

	useEffect(() => {
   		window.axios('/auth').then((response) => {
    		setUserID(response.data.id);
    	});
    }, []);

	const handleChange = event => {
		setType(event.target.value);
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
					          value={type}
					          onChange={handleChange}
					        >
					          <MenuItem value={3}>Справка по месту требования</MenuItem>
					          <MenuItem value={1}>Приложение 2-1</MenuItem>
					          <MenuItem value={2}>Приложение 4</MenuItem>
					          <MenuItem value={4}>Приложение 6</MenuItem>
					          <MenuItem value={5}>Приложение 8</MenuItem>
					          <MenuItem value={6}>Приложение 9</MenuItem>
					        </Select>
		      			</FormControl>
					</Box>
					{ (type == 1 || type == 2 || type == 3 || type == 4 || type == 5 || type == 6) &&
						<Box mt={2}><Button href={'/downloadReport' + type + 'PDF/' + userID} variant="contained" color="primary">Скачать</Button></Box>
					}
				</Box>
			</Box>										
		</Box>
	);
}

export default StudyPlan;