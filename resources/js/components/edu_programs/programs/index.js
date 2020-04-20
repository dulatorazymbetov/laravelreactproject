import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Paper from '@material-ui/core/Paper';

import TableContainer from '@material-ui/core/TableContainer';
import Table from '@material-ui/core/Table';
import TableHead from '@material-ui/core/TableHead';
import TableBody from '@material-ui/core/TableBody';
import TableRow from '@material-ui/core/TableRow';
import TableCell from '@material-ui/core/TableCell';

import Button from '@material-ui/core/Button';
import TextField from '@material-ui/core/TextField';

import Dialog from '@material-ui/core/Dialog';

import AddIcon from '@material-ui/icons/Add';

import { useLang } from "@contexts/lang";
import AddEduProgramsForm from "./add_form.js";


const useStyles = makeStyles(theme => ({
	
}));

function EduPrograms(){
	const classes = useStyles();
	const [programs, setPrograms] = useState([]);
	const [addOpen, setAddOpen] = useState(false);
	const [isLoading, setIsLoading] = useState(true);
	const { getL } = useLang();

	useEffect(() => {
       	getData();
    }, []);

	const refreshList = () => {
		getData();
	}

	async function getData() {
		window.axios.get('edu_programs').then((response) => {
			setPrograms(response.data);
			setIsLoading(false);
       	});
	}

	if(isLoading){return (<div />);}
	return (
		<Box>
			<Box my={4}>
				<Button size="large" startIcon={<AddIcon />} onClick={() => {setAddOpen(true)}} variant="contained" color="secondary">
					Новая программа
				</Button>
				<Dialog open={addOpen} fullWidth maxWidth="md" onClose={() => {setAddOpen(false)}}>
					<AddEduProgramsForm close={() => {setAddOpen(false)}} refresh={refreshList}/>
				</Dialog>
			</Box>
			<TableContainer component={Paper}>
				<Table>
					<TableHead>
						<TableRow>
							<TableCell>#</TableCell>
							<TableCell>Название</TableCell>
						</TableRow>
					</TableHead>
					<TableBody>
						{programs.map((program, tutor_index) => {
							return (
								<TableRow hover key={"tutor_"+tutor_index}>
									<TableCell>{program.id}</TableCell>
									<TableCell>
										{program.title_kk} <br/>
										{program.title_ru} <br/>
										{program.title_en}
									</TableCell>
								</TableRow>
							);
						})}
					</TableBody>
				</Table>
			</TableContainer>
		</Box>
	);
}

export default EduPrograms;