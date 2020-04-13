import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Grid from '@material-ui/core/Grid';

import Button from '@material-ui/core/Button';
import TextField from '@material-ui/core/TextField';
import FormControl from '@material-ui/core/FormControl';
import Select from '@material-ui/core/Select';
import InputLabel from '@material-ui/core/InputLabel';
import MenuItem from '@material-ui/core/MenuItem';

import DialogContent from '@material-ui/core/DialogContent';

import SaveIcon from '@material-ui/icons/Save';

import { useLang } from "@contexts/lang";
import MyDatePicker from "@layouts/datepicker";


const useStyles = makeStyles(theme => ({
	
}));


function AddEduProgramsForm(props){
	const classes = useStyles();

	const [isLoading, setIsLoading] = useState(true);
	const [formData, setFromData] = useState({});

	const [titleKk, setTitleKk] = useState('');
	const [titleRu, setTitleRu] = useState('');
	const [titleEn, setTitleEn] = useState('');
	const [eduProgramsGroup, setEduProgramsGroup] = useState('');
	const [eduProgramsType, setEduProgramsType] = useState('');
	const [goalsKk, setGoalsKk] = useState('');
	const [goalsRu, setGoalsRu] = useState('');
	const [goalsEn, setGoalsEn] = useState('');
	const [academicDegree, setAcademicDegree] = useState('');
	const [duration, setDuration] = useState('');
	const [credits, setCredits] = useState('');
	const [teachingLanguage, setTeachingLanguage] = useState('');
	const [appDate, setAppDate] = useState(null);
	const [nrkLevel, setNrkLevel] = useState('');
	const [orkLevel, setOrkLevel] = useState('');
	const { getL } = useLang();

	useEffect(() => {
       	window.axios.get('edu_programs/form').then((response) => {
			setFromData(response.data);
			setIsLoading(false);
       	});
    }, []);

	const handleSubmit = (event) => {
		event.preventDefault();
		const data = new FormData(event.target);
		window.axios.post('edu_programs', data)
		.then((response) => {
			props.close();
			props.refresh();
		});
	}

	if(isLoading){return (<div />);}

	return (
		<DialogContent>
			<form onSubmit={handleSubmit}>
				<Grid container spacing={3} >
					<Grid item xs={12} sm={12}>
						<TextField
							required
							name="title_kk"
							label="Название на казахском языке"
							fullWidth
							onChange={(event) => {setTitleKk(event.target.value)}}
							autoComplete="title_kk"
							value={titleKk}
							variant="filled"
						/>
					</Grid>
					<Grid item xs={12} sm={12}>
						<TextField
							required
							name="title_ru"
							label="Название на русском языке"
							fullWidth
							onChange={(event) => {setTitleRu(event.target.value)}}
							autoComplete="title_ru"
							value={titleRu}
							variant="filled"
						/>
					</Grid>
					<Grid item xs={12} sm={12}>
						<TextField
							required
							name="title_en"
							label="Название на английском языке"
							fullWidth
							onChange={(event) => {setTitleEn(event.target.value)}}
							autoComplete="title_en"
							value={titleEn}
							variant="filled"
						/>
					</Grid>
					<Grid item xs={12} sm={12}>
						<FormControl fullWidth variant="filled">
							<InputLabel id="edu-programs-type-label">
								Тип образовательной программы
							</InputLabel>
							<Select
								labelId="edu-programs-type-label"
								value={eduProgramsType}
								inputProps={{name: 'edu_programs_type_id'}}
								onChange={(event) => {setEduProgramsType(event.target.value)}}
							>
								{formData.edu_programs_type.map((list, index) => {
									return (
										<MenuItem value={list.id} key={index}>
											{list['title_'+getL]}
										</MenuItem>
									);
								})}
							</Select>
						</FormControl>
					</Grid>
					<Grid item xs={12} sm={12}>
						<FormControl fullWidth variant="filled">
							<InputLabel id="edu-programs-group-label">
								Группа образовательных программ
							</InputLabel>
							<Select
								labelId="edu-programs-group-label"
								value={eduProgramsGroup}
								inputProps={{name: 'edu_programs_group_id'}}
								onChange={(event) => {setEduProgramsGroup(event.target.value)}}
							>
								{formData.edu_programs_group.map((list, index) => {
									return (
										<MenuItem value={list.id} key={index}>
											{list['code']} - {list['title_'+getL]}
										</MenuItem>
									);
								})}
							</Select>
						</FormControl>
					</Grid>
					<Grid item xs={12} sm={12}>
						<TextField
							required
							name="goals_kk"
							label="Цель ОП казахском языке"
							fullWidth
							onChange={(event) => {setGoalsKk(event.target.value)}}
							autoComplete="goals_kk"
							value={goalsKk}
							variant="filled"
						/>
					</Grid>
					<Grid item xs={12} sm={12}>
						<TextField
							required
							name="goals_ru"
							label="Цель ОП руссокм языке"
							fullWidth
							onChange={(event) => {setGoalsRu(event.target.value)}}
							autoComplete="goals_ru"
							value={goalsRu}
							variant="filled"
						/>
					</Grid>
					<Grid item xs={12} sm={12}>
						<TextField
							required
							name="goals_en"
							label="Цель ОП английском языке"
							fullWidth
							onChange={(event) => {setGoalsEn(event.target.value)}}
							autoComplete="goals_en"
							value={goalsEn}
							variant="filled"
						/>
					</Grid>
					<Grid item xs={12} sm={6}>
						<FormControl fullWidth variant="filled">
							<InputLabel id="academic-degree-label">
								Академ. степень
							</InputLabel>
							<Select
								labelId="academic-degree-label"
								value={academicDegree}
								inputProps={{name: 'academic_degree_id'}}
								onChange={(event) => {setAcademicDegree(event.target.value)}}
							>
								{formData.academic_degree.map((list, index) => {
									return (
										<MenuItem value={list.id} key={index}>
											{list['title_'+getL]}
										</MenuItem>
									);
								})}
							</Select>
						</FormControl>
					</Grid>
					<Grid item xs={12} sm={6}>
						<FormControl fullWidth variant="filled">
							<InputLabel id="teaching-language-label">
								Язык обучения
							</InputLabel>
							<Select
								labelId="teaching-language-label"
								value={teachingLanguage}
								inputProps={{name: 'study_language_id'}}
								onChange={(event) => {setTeachingLanguage(event.target.value)}}
							>
								{formData.teaching_language.map((list, index) => {
									return (
										<MenuItem value={list.id} key={index}>
											{list['title_'+getL]}
										</MenuItem>
									);
								})}
							</Select>
						</FormControl>
					</Grid>
					<Grid item xs={12} sm={6}>
						<TextField
							required
							name="duration"
							label="Продолжительность обучения в годах"
							fullWidth
							onChange={(event) => {setDuration(event.target.value)}}
							autoComplete="duration"
							value={duration}
							variant="filled"
						/>
					</Grid>
					<Grid item xs={12} sm={6}>
						<TextField
							required
							name="credits"
							label="Количество кредитов"
							fullWidth
							onChange={(event) => {setCredits(event.target.value)}}
							autoComplete="credits"
							value={credits}
							variant="filled"
						/>
					</Grid>
					<Grid item xs={12} sm={12}>
						<MyDatePicker 
							value={appDate}
							setValue={setAppDate}
							label="Дата утверждения ОП"
							name="app_date"
						/>
					</Grid>
					<Grid item xs={12} sm={6}>
						<TextField
							required
							name="nrk_level"
							label="Уровень по НРК"
							fullWidth
							onChange={(event) => {setNrkLevel(event.target.value)}}
							autoComplete="nrk_level"
							value={nrkLevel}
							variant="filled"
						/>
					</Grid>
					<Grid item xs={12} sm={6}>
						<TextField
							required
							name="ork_level"
							label="Уровень по ОРК"
							fullWidth
							onChange={(event) => {setOrkLevel(event.target.value)}}
							autoComplete="ork_level"
							value={orkLevel}
							variant="filled"
						/>
					</Grid>
				</Grid>
				<Box mt={4} mb={2}>
					<Button type="submit" size="large" variant="contained" startIcon={<SaveIcon />} color="primary">Добавить</Button>
				</Box>
			</form>
		</DialogContent>
	);
}

export default AddEduProgramsForm;