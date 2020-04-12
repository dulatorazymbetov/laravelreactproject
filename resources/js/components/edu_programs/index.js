import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Paper from '@material-ui/core/Paper';
import Title from "@layouts/title";
import CountCard from "@layouts/card";

import TableContainer from '@material-ui/core/TableContainer';
import Table from '@material-ui/core/Table';
import TableHead from '@material-ui/core/TableHead';
import TableBody from '@material-ui/core/TableBody';
import TableRow from '@material-ui/core/TableRow';
import TableCell from '@material-ui/core/TableCell';

import Button from '@material-ui/core/Button';
import TextField from '@material-ui/core/TextField';

import Dialog from '@material-ui/core/Dialog';
import DialogActions from '@material-ui/core/DialogActions';
import DialogContent from '@material-ui/core/DialogContent';
import DialogContentText from '@material-ui/core/DialogContentText';
import DialogTitle from '@material-ui/core/DialogTitle';

import { useLang } from "@contexts/lang";

const useStyles = makeStyles(theme => ({
	
}));

function StudyPlan(){
	const classes = useStyles();
	const [students, setStudents] = useState([]);
	const [dialogOpen, setDialogOpen] = useState(false);
	const [dialogUser, setDialoguser] = useState([]);
	const [isLoading, setIsLoading] = useState(true);
	const { getL } = useLang();

	useEffect(() => {
       	window.axios.get('edu_programs/form').then((response) => {
			//setStudents(response.data);
			//setIsLoading(false);
       	});
    }, []);

	return (
		<Box>
			<Title content="Образовательные программы" />
			
		</Box>
	);
}

export default StudyPlan;