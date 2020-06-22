import React, { useState, useEffect } from "react";

import Box from '@material-ui/core/Box';
import Button from '@material-ui/core/Button';

function FormBuilderFile(props){
	const [upload, setUpload] = useState(false);
	const handleChange = (event) => {
		setUpload(event.target.value);
		props.handleChange(props.name, event.target.value);
	}
	return (
		<Box>
			<input
	  			accept="image/*"
	  			name={props.name}
	  			style={{ display: 'none' }}
	  			id={"contained-button-file-"+props.name}
	  			type="file"
	  			onChange={handleChange}
			/>
			<label htmlFor={"contained-button-file-"+props.name}>
	  			<Box>
	  				<Button variant="contained" color={props.file || upload ? 'secondary' : 'default'}component="span">
	    				{props.label}
	  				</Button>  ({upload ?  'Файл ожидает загрузки' : (props.file ? 'Файл загружен': 'Файл не выбран')})
	  			</Box>
			</label> 
		</Box>
	);
}
export default FormBuilderFile;