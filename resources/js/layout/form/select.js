import React, { useState, useEffect } from "react";
import { makeStyles } from '@material-ui/core/styles';

import FormControl from '@material-ui/core/FormControl';
import InputLabel from '@material-ui/core/InputLabel';
import TextField from '@material-ui/core/TextField';
import MenuItem from '@material-ui/core/MenuItem';
import Checkbox from '@material-ui/core/Checkbox';
import Chip from '@material-ui/core/Chip';

const useStyles = makeStyles(theme => ({
    chips: { display: 'flex', flexWrap: 'wrap'},
    chip: { margin: 2 },
}));

function FormBuilderSelect(props){
    const classes = useStyles();
    
    const itemsWithKey = {};
    props.select.items.map((list,index) => {itemsWithKey[list[props.select.value]] = list;});

    const handleChange = (event) => {
        setValue(event.target.value);
        props.handleChange(props.name, event.target.value);
    }
    const renderChips = (values) => {
        return (<div className={classes.chips}>
            {values.map((list, index) => <Chip className={classes.chip} key={index} color="secondary" label={itemsWithKey[list][props.select.label]} />)}
        </div>);
    }
    const getValues = (items, value) => {
        if(props.select.multiple){ if(Array.isArray(items)){return items.map((list, index) => {return list[value];})} else {return [];} }
        else { return items || '';}
    }
    const [value, setValue] = useState(getValues(props.value, props.select.value));

    let builderProps = {};
    builderProps.disabled = props.disabled;
    builderProps.fullWidth = true;
    builderProps.label = props.label;
    builderProps.name = props.name;
    builderProps.onChange = handleChange;
    builderProps.SelectProps = {};
    builderProps.value = value;
    builderProps.variant = 'filled';
    
    if(props.select.multiple){
        builderProps.multiline = true;
        builderProps.SelectProps.multiple = true;
        builderProps.SelectProps.renderValue = values => renderChips(values);
    }

    return (
        <div>
            <TextField {...builderProps} select>
                {props.select.items.map((list, index) => {
                    return (
                        <MenuItem value={list[props.select.value]} key={index}>
                            {builderProps.SelectProps.multiple && <Checkbox checked={value.indexOf(list[props.select.value]) > -1} />}
                            {list[props.select.label]}
                        </MenuItem>
                    );
                })}
            </TextField>
        </div>
    );
}
export default FormBuilderSelect;