import React, { useState, useEffect } from "react";

import FormControlLabel from '@material-ui/core/FormControlLabel';
import Checkbox from '@material-ui/core/Checkbox';

function FormBuilderCheckbox(props) {
	const [value, setValue] = useState(props.value || 0);
	const handleChange = (event) => {
		let newValue = event.target.checked ? 1 : 0;
		setValue(newValue);
		props.handleChange(props.name, newValue);
	}
	return (
		<div>
			<FormControlLabel
	        	control={
	        		<Checkbox
						disabled={props.disabled} 
						required={props.required}
						onChange={handleChange}
						checked={Boolean(value)}
					/>
	        	}
	        	label={props.label}
			/>
			<input value={value} name={props.name} readOnly hidden />
		</div>
	);
}

export default FormBuilderCheckbox;