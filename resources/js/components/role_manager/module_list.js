import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';

import Paper from '@material-ui/core/Paper';
import TableContainer from '@material-ui/core/TableContainer';
import Table from '@material-ui/core/Table';
import TableHead from '@material-ui/core/TableHead';
import TableBody from '@material-ui/core/TableBody';
import TableRow from '@material-ui/core/TableRow';
import TableCell from '@material-ui/core/TableCell';
import Button from '@material-ui/core/Button';

import { useLang } from "@contexts/lang";

const useStyles = makeStyles(theme => ({
	
}));

function ModuleList(props) {
	const classes = useStyles();
	const { setW, getW, setL, getL } = useLang();

	const [modules, setModules] = useState([]);

	useEffect(() => {
    	window.axios('/modules').then((response) => {
    		setModules(response.data);
    	});
    }, []);

	return (
		<TableContainer component={Paper}>
			<Table stickyHeader>
				<TableHead>
					<TableRow>
						<TableCell>
							ID
						</TableCell>
						<TableCell>
							Code
						</TableCell>
						<TableCell>
							Название
						</TableCell>
						<TableCell>
							Доступно
						</TableCell>
						<TableCell>
						</TableCell>
					</TableRow>
				</TableHead>
				<TableBody>
					{modules.map((module, module_index) => {
						return (
							<TableRow hover key={"role_"+module_index}>
								<TableCell>
									{module.id}
								</TableCell>
								<TableCell>
									{module.url}
								</TableCell>
								<TableCell>
									{module["description_"+getL]}
								</TableCell>
								<TableCell>
									{module.roles.map((role, role_index) =>{
										return (
											<div key={"role_"+role_index}>
												{role["description_"+getL]}
											</div>
										);
									})}
								</TableCell>
								<TableCell>
									<Button variant="outlined" color="primary" size="small">
										Редактировать
									</Button>
								</TableCell>
							</TableRow>
						);
					})}
				</TableBody>
			</Table>
		</TableContainer>
	);

} 
export default ModuleList;