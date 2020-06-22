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
	  			id="contained-button-file"
	  			type="file"
	  			onChange={handleChange}
			/>
			<label htmlFor="contained-button-file">
	  			{!props.file && <Box>
	  				<Button variant="contained" component="span">
	    				{props.label}
	  				</Button>  ({upload ? upload : 'Файл не выбран'})
	  			</Box>}
	  			{props.file && <Box>
	  				<Button variant="contained" color="secondary" component="span">
	    				Заменить {props.label}
	  				</Button>  (Файл загружен)
	  			</Box>
	  			}
			</label> 
		</Box>
	);
}
export default FormBuilderFile;