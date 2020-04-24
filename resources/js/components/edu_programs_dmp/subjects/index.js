import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Button from '@material-ui/core/Button';
import Dialog from '@material-ui/core/Dialog';

import AddIcon from '@material-ui/icons/Add';

import AddSubjectsForm from './add_form.js';
import { useLang } from "@contexts/lang";

const useStyles = makeStyles(theme => ({
	
}));

function SubjectsList(){
	const classes = useStyles();
	const { getL } = useLang();

	const [addOpen, setAddOpen] = useState(false);

	useEffect(() => {
       	getData();
    }, []);

	const refreshList = () => {
		getData();
	}

	async function getData() {
		
	}
	return (
		<Box>
			<Box my={4}>
				<Button size="large" startIcon={<AddIcon />} onClick={() => {setAddOpen(true)}} variant="contained" color="secondary">
					Добавить дисциплину
				</Button>
				<Dialog open={addOpen} fullWidth maxWidth="md" onClose={() => {setAddOpen(false)}}>
					<AddSubjectsForm close={() => {setAddOpen(false)}} refresh={refreshList}/>
				</Dialog>
			</Box>
		</Box>
	);
}
export default SubjectsList;