import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Grid from '@material-ui/core/Grid';
import TextField from '@material-ui/core/TextField';
import FormControl from '@material-ui/core/FormControl';
import Select from '@material-ui/core/Select';
import InputLabel from '@material-ui/core/InputLabel';
import MenuItem from '@material-ui/core/MenuItem';

import { MuiPickersUtilsProvider, DatePicker} from '@material-ui/pickers';
import ruLocale from "date-fns/locale/ru";
import DateFnsUtils from "@date-io/date-fns";
import enLocale from "date-fns/locale/en-US";

const useStyles = makeStyles(theme => ({

}));

function FormRespond(props){
	let initVal = {};
	props.fields.forEach(element => initVal[element.name] = element.value || '');
	const classes = useStyles();
	const [value, setValue] = useState(initVal);

	useEffect(() => {
    	
    }, []);

	const handleSubmit = (event) => {
		event.preventDefault();
		const data = new FormData(event.target);
		props.handleSubmit(data);
	}
	const setFieldValue = (event, type) => {
		let newValue = event.target.value;
		if(type === 'float'){newValue = parseFloat(newValue) || '';}
		setValue({...value, [event.target.name]: newValue});
	}
	return (
		<MuiPickersUtilsProvider utils={DateFnsUtils} locale={ruLocale}>
			<form onSubmit={handleSubmit}>
				<Grid container spacing={3}>
					{props.fields.map((list, index) => {
						return (
							<Grid item key={index} xs={12} sm={12 * (list.width || 1)}>
								{(list.type === 'string' || list.type === 'float' || !list.type) && <TextField
									required
									name={list.name}
									label={list.label || list.name}
									fullWidth
									onChange={(event) => {setFieldValue(event, list.type)}}
									autoComplete={list.name}
									value={value[list.name]}
									variant="filled"
								/>}
								{list.type === 'select' && <FormControl fullWidth variant="filled">
									<InputLabel id={list.name + "-label"}>
										{list.label}
									</InputLabel>
									<Select
										labelId={list.name + "-label"}
										value={value[list.name]}
										inputProps={{name: list.name}}
										onChange={(event) => {setFieldValue(event, list.type)}}
									>
										{list.select.items.map((select_list, select_index) => {
											return (
												<MenuItem value={select_list.id} key={select_index}>
													{select_list[list.select.label]}
												</MenuItem>
											);
										})}
									</Select>
								</FormControl>}
								{list.type === 'date' && <DatePicker
									value={value[list.name] || null}
									onChange={(date) => {setValue({...value, [list.name]: date})}}
						 			animateYearScrolling
						 			fullWidth
						 			autoOk
						 			clearable
						 			inputVariant="filled"
						 			format="yyyy-MM-dd"
						 			label={list.label}
						 			InputProps={{name: list.name}}
								/>}
							</Grid>
						);
					})}
				</Grid>
				<Box mt={4} mb={2}>{props.action}</Box>
			</form>
		</MuiPickersUtilsProvider>
	);
}

export default FormRespond;