import React, { useState, useEffect } from "react";
import { makeStyles } from '@material-ui/core/styles';

import Box from '@material-ui/core/Box';
import Grid from '@material-ui/core/Grid';
import AppBar from '@material-ui/core/AppBar';

import Dialog from '@material-ui/core/Dialog';
import DialogContent from '@material-ui/core/DialogContent';

import Tabs from '@material-ui/core/Tabs';
import Tab from '@material-ui/core/Tab';

import TextField from '@material-ui/core/TextField';
import FormControl from '@material-ui/core/FormControl';
import Select from '@material-ui/core/Select';
import InputLabel from '@material-ui/core/InputLabel';
import MenuItem from '@material-ui/core/MenuItem';

import { useLang } from "@contexts/lang"; 

const useStyles = makeStyles(theme => ({
	
}));

function StudyPlan(props){
	const classes = useStyles();

	const [tab, setTab] = useState(0);
	const [tutor, setTutor] = useState({});
	const [formData, setFormData] = useState({});
	const { getL } = useLang();

    async function getData() {
		window.axios.get('tutors/' + props.id).then((response) => {
			setFormData(response.data.form);
			setTutor(response.data.tutor);
        });
	}
	useEffect(() => {
		getData();
	}, []);
	
	const tabChange = (event, newValue) => {
		setTab(newValue);
	}
	if(!tutor.id){
		return (<div/>);
	}
	return (
		<Dialog
			fullWidth
			maxWidth="md"
			open={true}
			onClose={() => {props.setTutor(null)}}
		>
			<Appbar position="static" color="default">
				<Tabs
					value={tab}
					indicatorColor="primary"
					textColor="primary"
					onChange={tabChange}
					aria-label="tutor-tabs"
				>
					<Tab label="Данные о преподавателе" />
					<Tab label="Публикации" />
					<Tab label="Обучение" />
				</Tabs>
			</Appbar>
			<DialogContent>
				{tab===0 && <Box py={4} px={2}>
					<form>
						<Grid container spacing={3}>
							<Grid item xs={12} sm={6}>
          						<TextField
									required
									id="firstName"
									name="firstname"
									label="Имя"
									fullWidth
									autoComplete="fname"
									defaultValue={tutor.user.firstname}
									variant="filled"
          						/>
        					</Grid>
        					<Grid item xs={12} sm={6}>
          						<TextField
									required
									name="lastname"
									label="Фамилия"
									fullWidth
									autoComplete="lname"
									defaultValue={tutor.user.lastname}
									variant="filled"
          						/>
        					</Grid>
							<Grid item xs={12} sm={6}>
          						<TextField
									name="patronymic"
									label="Отчество"
									fullWidth
									autoComplete="patronymic"
									defaultValue={tutor.user.patronymic}
									variant="filled"
          						/>
        					</Grid>
							<Grid item xs={12} sm={6}>
          						<TextField
									required
									name="iin"
									label="ИИН"
									fullWidth
									autoComplete="iin"
									defaultValue={tutor.user.iin}
									variant="filled"
          						/>
        					</Grid>
							<Grid item xs={12}>
          						<TextField
									name="email"
									label="E-mail"
									fullWidth
									autoComplete="email"
									defaultValue={tutor.user.email}
									variant="filled"
          						/>
        					</Grid>
							<Grid item xs={12} sm={6}>
								<FormControl fullWidth variant="filled">
									<InputLabel id="academic-degree-label">Академ. степень</InputLabel>
									<Select
										labelId="academic-degree-label"
										value={tutor.academic_degree_id}
										onChange={() => {alert(123)}}
									>
										{formData.academic_degree.map((list, index) => {
											return (
												<MenuItem value={list.id}>
													{list['description_'+getL]}
												</MenuItem>
											);
										})}
									</Select>
								</FormControl>
        					</Grid>
							<Grid item xs={12} sm={6}>
								<FormControl fullWidth variant="filled">
									<InputLabel id="academic-rank-label">Ученое звание</InputLabel>
									<Select
										labelId="academic-rank-label"
										value={tutor.academic_rank_id}
										onChange={() => {alert(123)}}
									>
										{formData.academic_rank.map((list, index) => {
											return (
												<MenuItem value={list.id}>
													{list['description_'+getL]}
												</MenuItem>
											);
										})}
									</Select>
								</FormControl>
        					</Grid>
						</Grid>
					</form>
				</Box>}
			</DialogContent>
		</Dialog>
	);
}

export default StudyPlan;
