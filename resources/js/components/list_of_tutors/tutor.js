import React, { useState, useEffect } from "react";
import { makeStyles } from '@material-ui/core/styles';

import Box from '@material-ui/core/Box';
import Grid from '@material-ui/core/Grid';
import Paper from '@material-ui/core/Paper';
import Button from '@material-ui/core/Button';

import Dialog from '@material-ui/core/Dialog';
import DialogContent from '@material-ui/core/DialogContent';
import DialogActions  from '@material-ui/core/DialogActions';
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

	const [academicRankId, setAcademicRankId] = useState(null);
	const [academicDegreeId, setAcademicDegreeId] = useState(null);
	const [englishLevelId, setEnglishLevelId] = useState(null);
	const [isForeign, setIsForeign] = useState(0);

	const { getL } = useLang();

    async function getData() {
		window.axios.get('tutors/' + props.id).then((response) => {
			setFormData(response.data.form);
			setAcademicDegreeId(response.data.tutor.academic_degree_id);
			setAcademicRankId(response.data.tutor.academic_rank_id);
			setEnglishLevelId(response.data.tutor.english_level_id);
			setIsForeign(response.data.tutor.is_foreign);
			setTutor(response.data.tutor);
        });
	}
	useEffect(() => {
		getData();
	}, []);
	
	const tabChange = (event, newValue) => {setTab(newValue);}
	const handleSubmit = (event) => {
		event.preventDefault();
	}
	if(!tutor.id){return (<div/>);}

	return (
		<Dialog
			fullWidth
			maxWidth="md"
			open={true}
			onClose={() => {props.setTutor(null)}}
		>
			<Paper position="static" color="default">
				<Tabs
					value={tab}
					indicatorColor="primary"
					textColor="primary"
					onChange={tabChange}
					aria-label="tutor-tabs"
				>
					<Tab label="Данные о преподавателе" />
					<Tab label="Позиции" />
					<Tab label="Публикации" />
					<Tab label="Обучение" />
				</Tabs>
			</Paper>
			{tab===0 && <Box component="form" onSubmit={handleSubmit}>
				<DialogContent>
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
									value={academicDegreeId}
									onChange={(event) => {setAcademicDegreeId(event.target.value)}}
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
									value={academicRankId}
									onChange={(event) => {setAcademicRankId(event.target.value)}}
								>
									{formData.academic_rank.map((list, index) => {
										return (
											<MenuItem value={list.id} key={index}>
												{list['description_'+getL]}
											</MenuItem>
										);
									})}
								</Select>
							</FormControl>
						</Grid>
						<Grid item xs={12} sm={6}>
							<FormControl fullWidth variant="filled">
								<InputLabel id="english-level-id-label">Уровень английского языка</InputLabel>
								<Select
									labelId="english-level-id-label"
									value={englishLevelId}
									onChange={(event) => {setEnglishLevelId(event.target.value)}}
								>
									{formData.english_level.map((list, index) => {
										return (
											<MenuItem value={list.id} key={index}>
												{list['description_'+getL]}
											</MenuItem>
										);
									})}
								</Select>
							</FormControl>
						</Grid>
						<Grid item xs={12} sm={6}>
							<FormControl fullWidth variant="filled">
								<InputLabel id="is-foreign-label">Иностранный сотрудник</InputLabel>
								<Select
									labelId="is-foreign-label"
									value={isForeign}
									onChange={(event) => {setIsForeign(event.target.value)}}
								>
									<MenuItem value="0">Нет</MenuItem>
									<MenuItem value="1">Да</MenuItem>
								</Select>
							</FormControl>
						</Grid>
					</Grid>	
				</DialogContent>
				<DialogActions>
					<Button color="primary" variant="contained" type="submit">
						Сохранить
					</Button>
					<Button color="primary" onClick={() => {props.setTutor(null)}}>
						Отмена
					</Button>
				</DialogActions>
			</Box>}
		</Dialog>
	);
}

export default StudyPlan;
