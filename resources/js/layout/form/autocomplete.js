import React, { useState, useEffect } from "react";

import Autocomplete from '@material-ui/lab/Autocomplete';
import TextField from '@material-ui/core/TextField';

function FormBuilderAutocomplete(props){
	const getValue = () => {
		if(props.value){
			const index = props.autocomplete.items.findIndex((element, index, array) => {
      			return element.id === props.value;
      		});
      		return props.autocomplete.items[index];
		}
      	return {};
	}

	const [value, setValue] = useState(getValue);

	const renderInput = (params) => {
		return (<TextField required={props.required} {...params} label={props.label} variant="filled" />);
	}
	const getOptionLabel = (option) => {
		return option[props.autocomplete.label]+" "+option[props.autocomplete.prefix_label]
	}
	const handleChange = (event, newValue) => {
		setValue(newValue);
		props.handleChange(props.name, newValue.id);
	}

	let builderProps = {};
	builderProps.fullWidth = true;
	builderProps.openOnFocus = true;
	builderProps.disableClearable = true;
	builderProps.options = props.autocomplete.items;
	builderProps.renderInput = renderInput;
	builderProps.getOptionLabel = getOptionLabel;
	builderProps.onChange = handleChange;
	builderProps.value = value;

	return (
		<div>
			<Autocomplete 
				{...builderProps}
			/>
			<input name={props.name} hidden value={value.id} readOnly />
		</div>
	);
}
export default FormBuilderAutocomplete;