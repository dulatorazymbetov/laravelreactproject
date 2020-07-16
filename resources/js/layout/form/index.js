import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Grid from '@material-ui/core/Grid';
import Button from '@material-ui/core/Button';
import SaveIcon from '@material-ui/icons/Save';
import LinearProgress from '@material-ui/core/LinearProgress';
import Tooltip from '@material-ui/core/Tooltip';

import FormBuilderAutocomplete from "./autocomplete.js";
import FormBuilderCaptcha from "./captcha.js";
import FormBuilderCheckbox from "./checkbox.js";
import FormBuilderDate from "./date.js";
import FormBuilderFile from "./file.js";
import FormBuilderHeader from "./header.js";
import FormBuilderFloat from "./float.js";
import FormBuilderPassword from "./password.js";
import FormBuilderSelect from "./select.js";
import FormBuilderString from "./string.js";


const useStyles = makeStyles(theme => ({
	root: {
		display: 'flex',
		minHeight: '100%',
		flexDirection: 'column',
		width: '100%',
		position: 'relative',
	},
	title: {
		flex: '0 0 auto',
		fontWeight: '900',
		fontSize: '1.4rem'
	},
	content: {
		flex: '1 1 auto',
		overflowY: 'auto'
	},
	actions: {
		flex: '0 0 auto',
		display: 'flex',
		alignItems: 'center'
	}
}));

function FormRespond(props){
	let initVal = {};
	props.fields.forEach(element => {
		initVal[element.name] = element.value;
	});
	const classes = useStyles();
	const [value, setValue] = useState(initVal);

	useEffect(() => {
    	
    }, []);

	const handleSubmit = (event) => {
		event.preventDefault();
		const data = new FormData(event.target);
		props.handleSubmit(data);
	}
	const handleChangeValue = (name, newValue) => {
		setValue({...value, [name]: newValue});
		if(props.handleChange){
			props.handleChange({...value, [name]: newValue});
		}
	}
	let enter_rows = 0;
	let empty_rows = [];
	let all_rows = 0;

	return (
		<Box component="form" className={classes.root} onSubmit={handleSubmit}>
			<Box pt={3} pb={2} px={3} className={classes.title}>
				{props.title || "Новая форма"}
			</Box>
			{props.subtitle && <Box px={3}>{props.subtitle}</Box>}
			<Box className={classes.content} px={3} py={1}>
				<Grid container spacing={2}>
					{props.fields.map((list, index) => {
						if(list.required!==false && list.type!=='checkbox' && list.type!=='header'){
							list.required = true;
							all_rows++;
							if(value[list.name]){enter_rows++}
							else {empty_rows.push(list.label);}
						}
						if(props.disabled){list.disabled = true;}
						list.handleChange =  handleChangeValue;

						return (
							<Grid item key={index} xs={12} sm={12 * (list.width || 1)}>
								{list.type === 'float' && <FormBuilderFloat {...list} />}
								{(list.type === 'string' || !list.type) && <FormBuilderString {...list} />}
								{list.type === 'select' && <FormBuilderSelect {...list} />}
								{list.type === 'autocomplete' && <FormBuilderAutocomplete {...list} />}
								{list.type === 'checkbox' && <FormBuilderCheckbox {...list} />}
								{list.type === 'date' && <FormBuilderDate {...list} />}
								{list.type === 'password' && <FormBuilderPassword {...list} />}
								{list.type === 'header' && <FormBuilderHeader {...list} />}
								{list.type === 'file' && <FormBuilderFile {...list} />}
							</Grid>
						);
					})}
				</Grid>
			</Box>
			{props.disabled!==true && <Box className={classes.actions} px={3} pt={2} pb={2}>
				<Button 
					type="submit" 
					size="large" 
					variant="contained" 
					startIcon={<SaveIcon />} 
					color="primary"
					disabled={(all_rows - enter_rows) > 0}
				>
					{props.submitText ? props.submitText: "Отправить"}
				</Button>
				{(all_rows - enter_rows) > 0 && <Box ml={2} style={{flex: '1 1 auto',}}>
					<Tooltip title={empty_rows.length > 0 ? "Обязательные поля: " + empty_rows.join(', ') : 'Все важные поля заполнены'}>
						<Box mb={1}>* Заполните все важные поля (осталось: {all_rows - enter_rows})</Box>
					</Tooltip>
					<LinearProgress variant="determinate" value={(enter_rows/all_rows)*100} />
				</Box>}
			</Box>}
		</Box>
	);
}

export default FormRespond;