import React, { useState, useEffect } from "react";
import { makeStyles } from '@material-ui/core/styles';

import Box from '@material-ui/core/Box';
import Grid from '@material-ui/core/Grid';
import Paper from '@material-ui/core/Paper';
import Button from '@material-ui/core/Button';

import Dialog from '@material-ui/core/Dialog';
import DialogTitle from '@material-ui/core/DialogTitle';
import DialogContent from '@material-ui/core/DialogContent';
import DialogActions  from '@material-ui/core/DialogActions';
import Tabs from '@material-ui/core/Tabs';
import Tab from '@material-ui/core/Tab';

import TextField from '@material-ui/core/TextField';
import FormControl from '@material-ui/core/FormControl';
import Select from '@material-ui/core/Select';
import InputLabel from '@material-ui/core/InputLabel';
import MenuItem from '@material-ui/core/MenuItem';

import AddIcon from '@material-ui/icons/Add';

import { useLang } from "@contexts/lang";

const useStyles = makeStyles(theme => ({
	
}));

function Employee(props){
	const classes = useStyles();

	const [tab, setTab] = useState(0);
	const [isLoading, setIsLoading] = useState(true);
	const [formData, setFormData] = useState({});

	const [firstname, setFirstname] = useState('');
	const [lastname, setLastname] = useState('');
	const [patronymic, setPatronymic] = useState('');
	const [iin, setIin] = useState('');
	const [email, setEmail] = useState('');
	const [academicRankId, setAcademicRankId] = useState(null);
	const [academicDegreeId, setAcademicDegreeId] = useState(null);
	const [englishLevelId, setEnglishLevelId] = useState(null);
	const [isForeign, setIsForeign] = useState(0);

	const [newPositionTypeId, setNewPositionTypeId] = useState(null);
	const [newDepartmentId, setNewDepartmentId] = useState(null);
	const [newPositionTimeTypeId, setNewPositionTimeTypeId] = useState(null);
	const [positionAddOpen, setPositionAddOpen] = useState(false);

	const { getL } = useLang();

    async function getData() {
		window.axios.get('tutors/' + props.id).then((response) => {
			setFormData(response.data.form);
			setFirstname(response.data.tutor.user.firstname);
			setLastname(response.data.tutor.user.lastname);
			setPatronymic(response.data.tutor.user.patronymic);
			setIin(response.data.tutor.user.iin);
			setEmail(response.data.tutor.user.email);
			setAcademicDegreeId(response.data.tutor.academic_degree_id);
			setAcademicRankId(response.data.tutor.academic_rank_id);
			setEnglishLevelId(response.data.tutor.english_level_id);
			setIsForeign(response.data.tutor.is_foreign);
			setIsLoading(false);
        });
	}
	useEffect(() => {
		getData();
	}, []);
	
	const tabChange = (event, newValue) => {setTab(newValue);}
	const handleSubmit = (event) => {
		event.preventDefault();
		window.axios.post('tutors/'+props.id+'/edit', {
			lastname, firstname, patronymic, iin, email, 
			academic_degree_id: academicDegreeId,
			academic_rank_id: academicRankId,
			english_level_id: englishLevelId,
			is_foreign: isForeign
		}).then((response) => {
			props.close();
			props.refresh();
		});
	}
	if(isLoading){return (<div/>);}

	return (
		<Dialog
			fullWidth
			maxWidth="md"
			open={true}
			onClose={props.close}
		>
			<Paper position="static" color="default">
				<Tabs
					value={tab}
					indicatorColor="primary"
					textColor="primary"
					onChange={tabChange}
					aria-label="tutor-tabs"
				>
					<Tab label="Данные" />
					<Tab label="Должности" />
					<Tab label="Публикации" />
					<Tab label="Образование" />
				</Tabs>
			</Paper>
			{tab===0 && <Box component="form" onSubmit={handleSubmit}>
				<DialogContent>
					<Grid container spacing={3}>
						<Grid item xs={12} sm={6}>
							<TextField
								required
								name="firstname"
								label="Имя"
								fullWidth
								onChange={(event) => {setFirstname(event.target.value)}}
								autoComplete="fname"
								value={firstname}
								variant="filled"
							/>
						</Grid>
						<Grid item xs={12} sm={6}>
							<TextField
								required
								name="lastname"
								label="Фамилия"
								fullWidth
								onChange={(event) => {setLastname(event.target.value)}}
								autoComplete="lname"
								value={lastname}
								variant="filled"
							/>
						</Grid>
						<Grid item xs={12} sm={6}>
							<TextField
								name="patronymic"
								label="Отчество"
								fullWidth
								onChange={(event) => {setPatronymic(event.target.value)}}
								autoComplete="patronymic"
								value={patronymic}
								variant="filled"
							/>
						</Grid>
						<Grid item xs={12} sm={6}>
							<TextField
								required
								name="iin"
								label="ИИН"
								fullWidth
								onChange={(event) => {setIin(event.target.value)}}
								autoComplete="iin"
								value={iin}
								variant="filled"
							/>
						</Grid>
						<Grid item xs={12}>
							<TextField
								name="email"
								label="E-mail"
								fullWidth
								onChange={(event) => {setEmail(event.target.value)}}
								autoComplete="email"
								value={email}
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
					<Button color="primary" onClick={props.close}>
						Отмена
					</Button>
				</DialogActions>
			</Box>}
			{tab===1 && <Box>
				<DialogContent>
					<Dialog
						open={positionAddOpen}
						onClose={() => {setPositionAddOpen(false)}}
						fullWidth
						maxWidth="sm"
					>
						<DialogTitle>{firstname + " " +lastname}: Добавить новую должность</DialogTitle>
						<DialogContent>
							<Grid container spacing={3}>
								<Grid item xs={12}>
									<FormControl fullWidth variant="filled">
										<InputLabel id="position-type-id-label">Должность:</InputLabel>
										<Select
											labelId="position-type-id-label"
											value={newPositionTypeId}
											onChange={(event) => {setNewPositionTypeId(event.target.value)}}
										>
											{formData.position_type.map((list, index) => {
												return (
													<MenuItem value={list.id} key={index}>
														{list['description_'+getL]}
													</MenuItem>
												);
											})}
										</Select>
									</FormControl>
								</Grid>
								<Grid item xs={12}>
									<FormControl fullWidth variant="filled">
										<InputLabel id="department-id-label">Подразделение:</InputLabel>
										<Select
											labelId="department-id-label"
											value={newDepartmentId}
											onChange={(event) => {setNewDepartmentId(event.target.value)}}
										>
											{formData.department.map((list, index) => {
												return (
													<MenuItem value={list.id} key={index}>
														{list['title_'+getL]}
													</MenuItem>
												);
											})}
										</Select>
									</FormControl>
								</Grid>
								<Grid item xs={12}>
									<FormControl fullWidth variant="filled">
										<InputLabel id="position-time-type-id-label">Условия найма:</InputLabel>
										<Select
											labelId="position-time-type-id-label"
											value={newPositionTimeTypeId}
											onChange={(event) => {setNewPositionTimeTypeId(event.target.value)}}
										>
											{formData.position_time_type.map((list, index) => {
												return (
													<MenuItem value={list.id} key={index}>
														{list['title_'+getL]}
													</MenuItem>
												);
											})}
										</Select>
									</FormControl>
								</Grid>
							</Grid>
						</DialogContent>
						<DialogActions>
							<Button color="primary" variant="contained">
								Добавить
							</Button>
							<Button color="primary" onClick={() => {setPositionAddOpen(false)}}>
								Отмена
							</Button>
						</DialogActions>
					</Dialog>
				</DialogContent>
				<DialogActions>
					<Button startIcon={<AddIcon />} onClick={() => {setPositionAddOpen(true)}} color="primary" variant="contained">
						Добавить
					</Button>
					<Button color="primary" onClick={props.close}>
						Отмена
					</Button>
				</DialogActions>
			</Box>}
		</Dialog>
	);
}

export default Employee;
