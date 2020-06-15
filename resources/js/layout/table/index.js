import React, { useState, useEffect } from "react";
import { Link } from "react-router-dom";

import { makeStyles } from '@material-ui/core/styles';

import Paper from '@material-ui/core/Paper';
import Box from '@material-ui/core/Box';
import Button from '@material-ui/core/Button';
import Icon from '@material-ui/core/Icon';

import TableContainer from '@material-ui/core/TableContainer';
import Table from '@material-ui/core/Table';
import TablePagination from '@material-ui/core/TablePagination';
import TableHead from '@material-ui/core/TableHead';
import TableBody from '@material-ui/core/TableBody';
import TableRow from '@material-ui/core/TableRow';
import TableCell from '@material-ui/core/TableCell';

import TextField from '@material-ui/core/TextField';
import MenuItem from '@material-ui/core/MenuItem';

function TableBuilder(props){
	function defaultFilter() {
		let filter = {};
		if(props.filter){props.filter.rows.forEach(element => filter[element.name] = element.defaultValue);}
		return filter;
	}

	const [items, setItems] = useState([]);
	const [page, setPage] = useState(0);
	const [rowsPerPage, setRowsPerPage] = useState(15);
	const [count, setCount] = useState(0);
	const [showFilterBar, setShowFilterBar] = useState(false);
	const [filter, setFilter] = useState(defaultFilter());
	const [filterForm, setFilterForm] = useState({});
	const [searchInputTimer, setSearchInputTimer] = useState();

	useEffect(() => {
       	getData(rowsPerPage, page, filter);
    }, [props.refreshDate]);

	const handleChangePage = (event, newPage) => {
		setPage(newPage);
		getData(rowsPerPage, newPage, filter);
	}
	const handleChangeRowsPerPage = (event) => {
		const newValue = parseInt(event.target.value, 10);
		setRowsPerPage(newValue);
		setPage(0);
		getData(newValue, 0, filter);
	}
	const getData = (rows, page, filter) => {
		window.axios.get(props.url, {params: {rows, page, filter}})
			.then((response) => {
       			setItems(response.data.items);
				setCount(response.data.total);
				setFilterForm(response.data.filter);
       		});
	}
	const handleShowFilterBar = () => {
		if(showFilterBar){
			getData(rowsPerPage, page, defaultFilter());
		}
		setShowFilterBar(!showFilterBar); 
		setFilter(defaultFilter());
	}
	const handleSearch = (event) => {
		setFilter({...filter, search: event.target.value});
		clearTimeout(searchInputTimer);
		setSearchInputTimer(
			setTimeout(
				getData, 
				2000, 
				rowsPerPage, 
				page, 
				{...filter, search: event.target.value}
			)
		);
		
	}
	return (
		<Box>
			<Box mb={2} display="flex" alignItems="center">
				<Button 
					variant={showFilterBar ? "contained" : "outlined"}
					startIcon={<Icon>{showFilterBar ? "close" : "filter_list"}</Icon>}
					onClick={handleShowFilterBar}
					size="large"
				>
					Расширенный поиск
				</Button>
				<TablePagination
					rowsPerPageOptions={[15, 25, 50]}
					component="div"
					count={count}
					rowsPerPage={rowsPerPage}
					page={page}
					labelRowsPerPage="На страницу"
					labelDisplayedRows={({ from, to, count }) => `${from}-${to} из ${count}`}
					onChangePage={handleChangePage}
					onChangeRowsPerPage={handleChangeRowsPerPage}
				/>
			</Box>
			{showFilterBar && <Box component={Paper} p={2} my={2} display="flex">
				<Box flexGrow={1} p={1}>
					<TextField 
						value={filter['search'] || ''} 
						onChange={handleSearch} 
						label={props.filter ? props.filter.searchText || 'Поиск' : 'Поиск'} 
						variant="outlined"
						fullWidth
					/>
				</Box>
				{props.filter && props.filter.rows.map(row => {
					return (
						<Box p={1}>
							<TextField 
								key={"filter-"+row.name}
								value={filter[row.name] || ''} 
								onChange={(event) => {
									setFilter({...filter, [row.name]: event.target.value});
									getData(rowsPerPage, 0, {...filter, [row.name]: event.target.value});
								}} 
								label={row.label} 
								variant="outlined"
								select
								style={{minWidth: 120}}
							>
								<MenuItem>{row.emptyValue}</MenuItem>
								{filterForm[row.name].map((item, item_index) => {
									return (
										<MenuItem 
											key={"filter-"+row.name+"-item"+item_index}
											value={item[row.name]}
										>
											{item[row.name]}
										</MenuItem>
									);
								})}
							</TextField>
						</Box>
					);	
				})}
			</Box>}
			<TableContainer component={Paper}>
				<Table>
					<TableHead>
						<TableRow>
							<TableCell>#</TableCell>
							{props.rows.map((list,index) => {
								return (
									<TableCell key={"header_item_" + index}>{list.label}</TableCell>
								);
							})}
						</TableRow>
					</TableHead>
					<TableBody>
						{items.map((item,item_index) => {
							return (
								<TableRow hover key={"row_"+item_index}>
									<TableCell>{rowsPerPage*page+item_index+1}</TableCell>
									{props.rows.map((row, row_index) => {
										if(row.type==='string' || !row.type){
											return (
												<TableCell key={"row_"+row_index+"_item_"+item_index}>
													{typeof row.value === "function" ? row.value(item) : item[row.value]}
												</TableCell>
											);
										}
										else if(row.type==='action' || row.type==='link'){
											let params = {
												variant: row.action.variant || "text"
											}
											if(row.action.icon){params.startIcon = <Icon>{row.action.icon}</Icon>;}
											if(row.type === 'link'){
												params.component = Link;
												params.to = '/' + row.action.url_prefix + '/' + item[row.action.param];
											}
											else {
												params.onClick = () => {
													if(row.action.confirm){if(!confirm(row.action.confirm)){ return false; }}
													row.action.handle(item[row.action.param] || item)
												}
											}
											return (
												<TableCell key={"row_"+row_index+"_item_"+item_index}>
													<Button {...params}
														color={row.action.color || "default"}
													>
														{row.action.label}
													</Button>
												</TableCell>
											);
										}
									})}
								</TableRow>
							);
						})}
					</TableBody>
				</Table>
			</TableContainer>
			<Box mt={2}>
				<TablePagination
					rowsPerPageOptions={[15, 25, 50]}
					component="div"
					count={count}
					rowsPerPage={rowsPerPage}
					page={page}
					labelRowsPerPage="На страницу"
					labelDisplayedRows={({ from, to, count }) => `${from}-${to} из ${count}`}
					onChangePage={handleChangePage}
					onChangeRowsPerPage={handleChangeRowsPerPage}
				/>
			</Box>
		</Box>
	);
}
export default TableBuilder;