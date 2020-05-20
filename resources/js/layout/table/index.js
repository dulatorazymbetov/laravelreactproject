import React, { useState, useEffect } from "react";

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

function TableBuilder(props){
	const [items, setItems] = useState([]);
	const [page, setPage] = useState(0);
	const [rowsPerPage, setRowsPerPage] = useState(15);
	const [count, setCount] = useState(0);
	const [showFilter, setShowFilter] = useState(false);
	const [filter, setFilter] = useState({});
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
		getData(newValue, 0);
	}

	const getData = (rows, page, filter) => {
		console.log(searchInputTimer);
		window.axios.get(props.url, {params: {rows, page, filter}})
			.then((response) => {
       			setItems(response.data.items);
       			setCount(response.data.total);
       		});
	}
	const handleSearch = (event) => {
		setFilter({...filter, search: event.target.value});
		clearTimeout(searchInputTimer);
		setSearchInputTimer(
			setTimeout(
				getData, 
				3000, 
				rowsPerPage, 
				page, 
				{...filter, search: event.target.value}
			)
		);
		
	}
	return (
		<Box>
			<Box mb={2} display="flex">
				<Button 
					variant={showFilter ? "contained" : "outlined"}
					startIcon={<Icon>{showFilter ? "close" : "filter_list"}</Icon>}
					onClick={() => {setShowFilter(!showFilter)}}
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
			{showFilter && <Box component={Paper} p={2} my={2}>
				<TextField 
					value={filter['search'] || ''} 
					onChange={handleSearch} 
					label="Поиск" 
					variant="outlined" 
				/>	
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
													{Array.isArray(row.value) 
														? 
														(item[row.value[0]] ? item[row.value[0]][row.value[1]] : '-')
														: 
														item[row.value]
													}
												</TableCell>
											);
										}
										else if(row.type==='action' || row.type==='link'){
											let params = {
												onClick: () => {
													if(row.action.confirm){
														if(!confirm(row.action.confirm)){ return false; }
													}
													row.action.handle(item[row.action.param] || item)
												},
												variant: row.action.variant || "text",
											}
											if(row.action.icon){params.startIcon = <Icon>{row.action.icon}</Icon>;}
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