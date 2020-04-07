import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Paper from '@material-ui/core/Paper';
import Divider from '@material-ui/core/Divider';
import InputBase from '@material-ui/core/InputBase';
import TableContainer from '@material-ui/core/TableContainer';
import Table from '@material-ui/core/Table';
import TableHead from '@material-ui/core/TableHead';
import TableBody from '@material-ui/core/TableBody';
import TableRow from '@material-ui/core/TableRow';
import TableCell from '@material-ui/core/TableCell';
import TablePagination from '@material-ui/core/TablePagination';

import IconButton from '@material-ui/core/IconButton';
import MenuIcon from '@material-ui/icons/Menu';
import SearchIcon from '@material-ui/icons/Search';
import TuneIcon from '@material-ui/icons/Tune';
import PermContactCalendarIcon from '@material-ui/icons/PermContactCalendar';

import Title from "@layouts/title";
import { useLang } from "@contexts/lang";

import Tutor from "./tutor.js";

const useStyles = makeStyles(theme => ({
	search: {
		display: 'flex',
		alignItems: 'center',
		padding: '8px'
	},
	iconButton: {
		padding: 10,
	},
	input: {
		marginLeft: theme.spacing(1),
		flex: 1,
	},
	divider: {
		height: 28,
		margin: 4,
	},
}));

function ListOfStaff(){
	const classes = useStyles();
	const [isLoading, setIsLoading] = useState(true);
	const [statistic, setStatistic] = useState(0);
	const [tutors, setTutors] = useState([]);
	const [selectTutor, setSelectTutor] = useState(null);
	const [page, setPage] = useState(0);
	const [rowsPerPage, setRowsPerPage] = useState(15);
	const [searchString, setSearchString] = useState('');
	const { getL } = useLang();

	const handleChangePage = (event, newPage) => {
		setPage(newPage);
		getData(rowsPerPage, newPage, searchString);
	}

	const handleChangeRowsPerPage = (event) => {
		const newValue = parseInt(event.target.value, 10);
		setRowsPerPage(newValue);
		setPage(0);
		getData(newValue, 0, searchString);
	}
	const refreshList = () => {
		getData(rowsPerPage, page, searchString);
	}
	const handleSearch = (event) => {
		event.preventDefault();
		setPage(0);
		getData(rowsPerPage, 0, searchString);
	}
    async function getData(rows, page, search=null) {
		if(search === ''){search = null;}
		window.axios.get('tutors', {
			params: {rows,page, search}
		}).then((response) => {
			setTutors(response.data.list);
			setStatistic(response.data.statistic);
			setIsLoading(false);
        });
	}
	useEffect(() => {
		getData(rowsPerPage, page);
	}, []);
	
	return (
		<Box>
			<Title content="Список сотрудников" />
			{!isLoading && <Box mt={4}>
				<Paper component="form" onSubmit={handleSearch} className={classes.search}>
					<IconButton className={classes.iconButton} aria-label="menu">
						<MenuIcon />
					</IconButton>
					<InputBase
						className={classes.input}
						value={searchString}
						onChange={() => {setSearchString(event.target.value)}}
						placeholder="Поиск сотрудников"
						inputProps={{ 'aria-label': 'search staff' }}
					/>
					<IconButton type="submit" className={classes.iconButton} aria-label="search">
        				<SearchIcon />
      				</IconButton>
					<Divider className={classes.divider} orientation="vertical" />
      				<IconButton color="primary" className={classes.iconButton} aria-label="directions">
        				<TuneIcon />
      				</IconButton>
				</Paper>
				<Box my={2}>
					<TablePagination
						rowsPerPageOptions={[15, 25, 50]}
						component="div"
						count={statistic.with_filter}
						rowsPerPage={rowsPerPage}
						page={page}
						labelRowsPerPage="Сотрудников на страницу"
						labelDisplayedRows={({ from, to, count }) => `${from}-${to} из ${count}`}
						onChangePage={handleChangePage}
						onChangeRowsPerPage={handleChangeRowsPerPage}
					/>
				</Box>
				<TableContainer component={Paper}>
					<Table>
						<TableHead>
							<TableRow>
								<TableCell>#</TableCell>
								<TableCell>Учетная запись</TableCell>
								<TableCell>ФИО</TableCell>
								<TableCell>Уч. Степень</TableCell>
								<TableCell>Уч. Звание</TableCell>
								<TableCell></TableCell>
							</TableRow>
						</TableHead>
						<TableBody>
							{tutors.map((tutor, tutor_index) => {
								return (
									<TableRow hover key={"tutor_"+tutor_index}>
										<TableCell>{tutor.id}</TableCell>
										<TableCell>{tutor.user.login}</TableCell>
										<TableCell>{tutor.user.lastname} {tutor.user.firstname} {tutor.user.patronymic}</TableCell>
										<TableCell>{tutor.academic_degree['description_'+getL]}</TableCell>
										<TableCell>{tutor.academic_rank['description_'+getL]}</TableCell>
										<TableCell>
											<IconButton onClick={() => {setSelectTutor(tutor.id)}} aria-label="Редактировать">
												<PermContactCalendarIcon />
											</IconButton>   
										</TableCell>
									</TableRow>
								);
							})}
						</TableBody>
					</Table>
				</TableContainer>
			</Box>}
			{selectTutor && <Tutor id={selectTutor} close={() => {setSelectTutor(null)}} refresh={refreshList}/>}
		</Box>
	);
}

export default ListOfStaff;
